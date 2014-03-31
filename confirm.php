<?php
include("conn.php");
$id_code=$_GET['id_code'];
$sql = "update user set status = '1' where U_id_code='$id_code'";
$result = mysql_query("$sql") or die(mysql_error());


echo "<Font Size=4><B>ยืนยันการขอใช้งาน <Font color=red> รหัสบุคลากร =  $id_code </Font>เรียบร้อยแล้ว</B><Br>";
echo "<Br><A Href=\"new.php\"> กลับ</A>";	
?>
