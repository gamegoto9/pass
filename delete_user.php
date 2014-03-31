<?php
include("conn.php");
$id_code=$_GET['id_code'];
$sql = "delete from user where U_id_code='$id_code'";	// กำหนดคำสั่ง SQL เพื่อแก้ไขข้อมูลแบบคีย์ในคำสั่ง SQL
$result = mysql_query("$sql") or die(mysql_error());// เริ่มเอ็กซิคิวต์คำสั่ง SQL


echo "<Font Size=4><B>ลบข้อมูล เรกคอร์ดของ <Font color=red> รหัสบุคลากร =  $id_code </Font>เรียบร้อยแล้ว</B><Br>";
echo "<Br><A Href=\"new.php\"> ดูผลการเปลี่ยนแปลง / ลบข้อมูลอีก</A>";	// เครื่องหมาย / หน้า " ทำให้ไม่เกิด error เมื่อรัน
?>
