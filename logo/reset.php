
<script>
function test_num() {
	var value = document.getElementsByName( 'num' )[0].value;

	if( value.length == 0 ) {
		alert( 'Merci de renseigner le champ num.' );
		return false;
	}

	return true;
}
</script>

<center><h1>Reset</h1></center>

<form method="post">
<span>Num</span>
<input type="text" size="3" name="num" />
<input type="submit" name="click" value="Ok" onclick="return test_num();"/>
</form>

<br />
<br />

<?php

if( $_POST['click'] == "Ok" ) {

	$num = mysql_escape_string( $_POST['num'] );

	mysql_connect( "localhost", "newsletter", "65f61ced21494" );
	mysql_select_db( "newsletter" );

	$sql = "SELECT * FROM CPT WHERE NUM = '$num'";
	echo "Suppression de ".mysql_num_rows( mysql_query( $sql ) )." tuples.";

	$sql = "DELETE FROM CPT WHERE NUM = '$num'";
	mysql_query( $sql );

	mysql_close();
}
?>
