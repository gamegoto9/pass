<?
session_start();
include("conn.php");
$msg="";

$sql = "select * from user where status='0'";

$result = mysql_query("$sql")  or die(mysql_error());


$type="";
$major="";

		if(mysql_num_rows($result) ==0){
			header("Refresh : 3;url = admin.php");
			echo "<h3>ไม่มีข้อมูลสมาชิกใหม่ จะกลับสู่หน้าหลักภายใน 3 วินาที </h3>";
			echo "</body></html>";
			exit;
		}else{

echo "<table border=3 cellpadding=3>

		<th>ชื่อ-สกุล</th>
		<th>รหัสประจำตัวประชาชน</th>
		<th>รหัสบุคลากร</th>
		<th>ประเภท</th>
		<th>สาขาวิชา</th>
		<th>เบอร์โทร</th>
		<th>เบอร์มือถือ</th>
		<th>E-mail</th>
		<th>ดูข้อมูล</th>
		<th>ลบ</th>

";

while($data = mysql_fetch_array($result)){
	
	$sql2 = "select * from type where T_id = ".$data["T_id"]."";
	$result2 = mysql_query("$sql2")  or die(mysql_error());
	
	$type = mysql_result($result2,0,"T_name");
	
	$sql2 = "select * from major where M_id =".$data["M_id"]."";
	$result2 = mysql_query("$sql2")  or die(mysql_error());
	
	$major = mysql_result($result2,0,"M_name");
	
	echo "<tr>
				<td>".$data["U_Tname"]."</td>
				<td>".$data["U_id"]."</td>
				<td>".$data["U_id_code"]."</td>
				<td>".$type."</td>
				<td>".$major."</td>
				<td>".$data["tel"]."</td>
				<td>".$data["tel2"]."</td>
				<td>".$data["email"]."</td>
				
				<td><a href=\"edit_user.php?id_code=".$data["U_id_code"]."\">ดูข้อมูล</a></td>
				
				<td><a href=\"delete_user.php?id_code=".$data["U_id_code"]."\">ลบ</a></td>

				</tr>";
}
}

?>
