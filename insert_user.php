<?
session_start();
$errmsg ="";
include("conn.php");


if(!empty($_POST['Tname'])  && !empty($_POST['Ename']) && !empty($_POST['id_card']) && !empty($_POST['id_code']) && !empty($_POST['email']) && !empty($_POST['major']) && !empty($_POST['type'])){
	
	
	$email = $_POST['email'];

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
	

$result = mysql_query("select U_id_code,U_id from user") or die(mysql_error());
$check_id_code = array();
$check_id= array();
$i=0;
while($data = mysql_fetch_array($result)){
	
	$check_id_code[$i] = "{$data [0]}";
	$check_id[$i] = "{$data [1]}";
	
	if($_POST['id_code'] == $check_id_code[$i] || $_POST['id_card'] ==$check_id[$i]){
		
		echo "รหัสบุคลากรนี้มีผู้ใช้แล้ว<p>";
		echo "<a href =\" javascript: history.back();\">ย้อนกลับ</a>";
		exit;
	}
}


$B_date = $_POST['YYYY'].'-'.$_POST['MM'].'-'.$_POST['DD'];
	
$sql = "insert into user values('".$_POST['Tname']."','".$_POST['Ename']."','".$_POST['id_card']."','".$_POST['id_passport']."','".$_POST['id_code']."','".$B_date."','".$_POST['major']."','".$_POST['type']."','".$_POST['tel']."','".$_POST['tel2']."','".$_POST['email']."','".date("Y-m-d")."','0');";
$result = mysql_query($sql) or die(mysql_error());	
		 
 echo "<center>บันทึกข้อมูลเรียบร้อย</center>";
 echo "<a href=\"login.php\">กลับสู่หน้าหลัก</a>";
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
	
	
//$captcha = $_POST['captcha'];

//echo "$captcha<br/>";
///echo $_SESSION['captcha'];

//if($captcha != $_SESSION['captcha']){
//	echo "ใส่อักขระไม่ตรงกับในภาพ";
//	echo "$captcha<br/>";
///	echo $_SESSION['captcha'];
//}else{
	
}
//}
?>
