<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
<script src="ajax/framework.js"></script>
<script type="text/javascript">
	function hide(){
	
			var x = document.getElementById("search").selectedIndex;
			if(x =="1" || x=="2" || x==  "3"){				
          			var elem = document.getElementById('data');
         			elem.style.display = 'none';
/*					
					var mi = document.createElement("input");
						mi.setAttribute('type', 'text');
						mi.setAttribute('value', '');
						mi.setAttribute('name', 'aa');
						
					document.body.appendChild(mi);
*/
					var txt = document.getElementById('txtdata');
         			txt.style.display = 'inline';			
								
			}else if(x =="0" || x=="4"){
				
					var elem = document.getElementById('data');
         			elem.style.display = 'inline';
					
					var txt = document.getElementById('txtdata');
         			txt.style.display = 'none';
				
			}
}
</script>
<script>
function ajaxCall() { 
	var data = getFormData("form1");
	var URL = "update3.php";
	ajaxLoad('get', URL, data, null);
}
function removeOption() {
	var el = document.getElementById('data');
	while(el.length>0) {
		el.options[0] = null;
	}
}
</script>
</head>

<body onload="hide();">
<form id="form1" name="form1" method="post" action="<? $_SERVER['PHP_SELF'] ?>">
  <p>
    <label>
      <select name="search" id="search" onchange="ajaxCall();hide();">
        <option value="type">สถาณะผู้สมัคร</option>
        <option value="id_card">รหัสประจำตัวประชาชน</option>
        <option value="name">ชื่อผู้ขอใช้บริการ</option>
        <option value="id_code">รหัสประจำตัวบุคลากร</option>
        <option value="D_id">หน่วยงาน</option>
      </select>
      <select name="data" id="data">
        <option value="0">0</option>
      </select>
      <input type="text" name="txtdata" id="txtdata" />
    </label>
    <input type="submit" name="button" id="button" value="ค้นหา" />
    <input type="button"  onclick="window.location.href='admin.php'" value="ยกเลิก" />
  </p>
</form>
<script> ajaxCall(); </script>
<?


if(isset($_POST['data'])){
	include("conn.php");
	$txtdata = $_POST['data'];
	$type = $_POST['search'];

	$sql="";
	$result="";
	$msg="";
	if($type == "type"){
		

		$sql = "select U_id_code,U_Tname,U_id,U_Bdate,major.M_name,department.D_name,type.T_name,tel2,email
from user,type,major,department
where user.T_id = type.T_id and 
user.M_id = major.M_id and
department.D_id = major.D_id and
type.T_id = '$txtdata'";
					
		$result = mysql_query("$sql") or die(mysql_error());
	
	}else if($type == "id_card"){
		$txtdata = $_POST['txtdata'];
		if(!is_numeric($txtdata)){
		
			$msg= "ป้อนรหัสประจำตัวประชาชนไม่ถูกต้อง";
			
		}	
			$sql = "select U_id_code,U_Tname,U_id,U_Bdate,major.M_name,department.D_name,type.T_name,tel2,email
from user,type,major,department
where user.T_id = type.T_id and 
user.M_id = major.M_id and
department.D_id = major.D_id and
U_id = '$txtdata'";
		$result = mysql_query("$sql") or die(mysql_error());
	}
	
	else if($type == "name"){
		
		
		$txtdata = $_POST['txtdata'];
			
			$sql = "select U_id_code,U_Tname,U_id,U_Bdate,major.M_name,department.D_name,type.T_name,tel2,email
from user,type,major,department
where user.T_id = type.T_id and 
user.M_id = major.M_id and
department.D_id = major.D_id and
U_Tname  LIKE '%$txtdata%'";
		$result = mysql_query("$sql") or die(mysql_error());
	}

		
	else if($type == "id_code"){
		
		
		$txtdata = $_POST['txtdata'];
			
			$sql = "select U_id_code,U_Tname,U_id,U_Bdate,major.M_name,department.D_name,type.T_name,tel2,email
from user,type,major,department
where user.T_id = type.T_id and 
user.M_id = major.M_id and
department.D_id = major.D_id and
U_id_code  LIKE '%$txtdata%'";
		$result = mysql_query("$sql") or die(mysql_error());
	}
		
	else if($type == "D_id"){
		
		
		$txtdata = $_POST['data'];
			
			$sql = "select U_id_code,U_Tname,U_id,U_Bdate,major.M_name,department.D_name,type.T_name,tel2,email
from user,type,major,department
where user.T_id = type.T_id and 
user.M_id = major.M_id and
department.D_id = major.D_id and
department.D_id  ='$txtdata'";
		$result = mysql_query("$sql") or die(mysql_error());
	}
		
		
	if(mysql_num_rows($result) == 0){
		
		$msg .="ไม่มีข้อมูล";
		echo $msg;
		
	}else
	{
		
		echo "<table border= 1 cellpadding= 1>
		
			<th>รหัสบุคลากร</th>
			<th>ชื่อ-สกุล</th>
			<th>รหัสประจำตัวประชาชน</th>
			<th>วัน/เดือน/ปี เกิด</th>
			<th>หน่วยงาน/สังกัด</th>
			<th>โปรแกรมวิชา</th>
			<th>สถานะ</th>
			<th>เบอร์โทร</th>
			<th>E-mail</th>
		";
			
		while($data = mysql_fetch_array($result)){
			echo "<tr><td>".$data['0']."</td>
					<td>".$data['1']."</td>
					<td>".$data['2']."</td>
					<td>".$data['3']."</td>
					<td>".$data['5']."</td>
					<td>".$data['4']."</td>
					<td>".$data['6']."</td>
					<td>".$data['7']."</td>
					<td>".$data['8']."</td>
				
			
			</tr>";
		}
		
	}
	
	
}else{
	
}

?>
</body>
</html>
