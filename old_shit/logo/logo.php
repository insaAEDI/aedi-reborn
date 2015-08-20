<?php

header('Content-Type: image/png');

function LoadPNG($imgname)
{
    /* Attempt to open */
    $im = @imagecreatefrompng($imgname);

    imagealphablending($im, false);
    imagesavealpha($im, true);

    /* See if it failed */
    if(!$im)
    {
        /* Create a blank image */
        $im  = imagecreatetruecolor(150, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

        /* Output an error message */
        imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
    }

    return $im;
}

$img = LoadPNG('hdr_news.png');

imagepng($img);
imagedestroy($img);

if( @$_GET['num'] == 0 ) {
	die;
}

$num = mysql_escape_string( $_GET['num'] );
if( is_numeric( $num ) == false ) {
	die;
}

mysql_connect( "localhost", "newsletter", "65f61ced21494" );
mysql_select_db( "newsletter" );

$sql = "INSERT INTO CPT( IP, NUM ) VALUES( '".$_SERVER['REMOTE_ADDR']."', '$num' )";
mysql_query( $sql );

mysql_close();

?>
