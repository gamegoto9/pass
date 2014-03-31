<?

$link = mysql_connect("localhost","root","root") or die(mysql_error());
mysql_query("SET CHARACTER SET tis620;");
$db = "crru";
mysql_select_db($db);


?>
