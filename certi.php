<?php
session_start();
if(isset($_POST['s1']))
{
$font="ANKLEPAN.ttf";
$font1="agencyr.ttf";
$im=imagecreatefromjpeg("divvlearn.jpg");
// certificate model templete
$textcolor=imagecolorallocate($im,0,0,0);// color is black
$name=$_SESSION['name'];// get the name from loginpage
$output=$name.'.jpg';
// file name
imagefttext($im,50,0,1390,956,$textcolor,$font,$name);
// imagefttext(image, size, angle, x, y, color, fontfile, text)
$date=date("d/m/Y") ;
imagefttext($im,38,0,938,1417,$textcolor,$font1,$date);
imagejpeg($im,$output);//to save the image

if(file_exists($output))
{
	// download the certificate
	header('content-Description: File Transfer');
	header('content-Type: application/image');
	header('content-Disposition: attachment; filename="' .basename($output).'"');
	header('content-Length:' . filesize($output));
	readfile($output);
	
}
}
?>