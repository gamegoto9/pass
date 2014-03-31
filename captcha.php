<?
session_start();

$str = md5(crypt("captcha"));
$captcha = strtoupper(substr($str,0,4));
$_SESSION['captcha'] = $captcha;

$img = imagecreate(55,35);
$bg = imagecolorallocate($img,0,0,0);
$color = imagecolorallocate($img,255,255,255);
imagestring($img,5,10,10,"$captcha",$color);

header("Content-type: image/gif");
imagegif($img);
imagedestroy($img);

?>
