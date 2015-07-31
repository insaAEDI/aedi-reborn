<?php

$num = mysql_escape_string( $_GET['num'] );
if( is_numeric( $num ) == false ) {
	$num = 0;
}

mysql_connect( "localhost", "newsletter", "65f61ced21494" );
mysql_select_db( "newsletter" );

$sql = "SELECT IP, CURRENT_TS, UNIX_TIMESTAMP(CURRENT_TS) AS TS FROM CPT WHERE NUM = '$num'";
$res = mysql_query( $sql );

$num_total = mysql_num_rows($res);
$num_per_hour = array();
$hours = array();
$listing   = "";
$cpt = -1;
$first = 0;
$is_first = true;
while( ($data = mysql_fetch_array( $res ) ) ) {

	$listing .= $data['IP']." [".gethostbyaddr($data['IP'])."] - ".$data['CURRENT_TS']."</br>";

	if( $data['TS'] > $first+3600 ) {
		
		while( $data['TS'] > $first+3600 ) {

			if( $is_first ) {
				$first = $data['TS'];
				$is_first = false;
			}
			else
				$first += 3600;

			$cpt++;

			@$hours[$cpt] = $first;
			@$num_per_hour[$cpt] = 0;
		}
	}

	if( $data['TS'] <= $first+3600 ) 
		@$num_per_hour[$cpt]++;
}

$sql = "SELECT COUNT(*) FROM CPT WHERE NUM = '$num' GROUP BY IP";
$res = mysql_query( $sql );

$num_no_double = mysql_num_rows( $res );
$num_avg_view = 0;
while( ($data = mysql_fetch_array( $res )) ) {
	$num_avg_view += $data[0];
}

if( $num_no_double > 0 ) {
	$num_avg_view = $num_avg_view / $num_no_double;
}

mysql_close();


// Affichage

echo "Il y a eu $num_total vues au total.</br>";
echo "Il y a eu $num_no_double vues sans double compte.</br>";
echo "En moyenne, une IP visualise $num_avg_view fois le contenu.</br>";

echo "</br></br>";

echo "<h1>Statistiques par heure apr&egrave;s envoi</h1></br>";

echo "<table border=0>";
for( $i = 0; $i < count( $num_per_hour ); $i++ ) {

	echo "<tr>";
	echo "<td>De ".date('H:i', $hours[$i] )." &agrave; ".date('H:i', $hours[$i]+3600 )." : ".$num_per_hour[$i]."</td>";
	echo "</td><td>";
	$percent = $num_per_hour[$i] / $num_total * 100;
	for( $n = 0; $n < $percent; $n++ ) {
		echo "#";
	}
	echo ceil( $percent )."%";
	echo "</td></tr>";
	
}
echo "</table>";

echo "</br></br>";

echo $listing;

?>
