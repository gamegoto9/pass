<?
session_start();
$errmsg ="";
include("conn.php");


echo $_POST['major'];
echo $_POST['id_code'];

if(!empty($_POST['Tname']) && !empty($_POST['Ename']) && !empty($_POST['id_card']) && !empty($_POST['id_code']) && !empty($_POST['email']) && !empty($_POST['major']) && !empty($_POST['type']) ){
	

	
$email = $_POST['email'];

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
	


$B_date = $_POST['YYYY'].'-'.$_POST['MM'].'-'.$_POST['DD'];

$sql = "update user set U_Tname = '".$_POST['Tname']."',U_Ename = '".$_POST['Ename']."',U_id = '".$_POST['id_card']."',U_passport ='".$_POST['id_passport']."',U_id_code ='".$_POST['id_code']."',U_Bdate ='".$B_date."',M_id ='".$_POST['major']."',T_id ='".$_POST['type']."',tel ='".$_POST['tel']."',tel2 ='".$_POST['tel2']."',email ='".$_POST['email']."' where U_id_code = '".$_POST['id_code']."';";


$result = mysql_query($sql) or die(mysql_error());	
		 
echo "<Font Size=4><B>แก้ไขข้อมูล เรกคอร์ดของ <Font color=red> รหัสบุคลากร =  $id_code </Font>เรียบร้อยแล้ว</B><Br>";
echo "<Br><A Href=\"new.php\"> ดูผลการเปลี่ยนแปลง</A>";	//
 echo "</body></html>";
 exit;
 

}else{
	echo "ใส่อีเมลไม่ตรงตามรูปแบบ";
}
	
	
	
	
}
else 
{
	echo "กรอกข้อมูลไม่ครบ<p>";
	
	echo "<a href =\" javascript: history.back();\">ย้อนกลับ</a>";

}
//}

?>
