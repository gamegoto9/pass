<?
include("conn.php");
$table = "department";
//$id ="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Register</title>

<script src="ajax/framework.js"></script>
<script>
function ajaxCall() { 
	var data = getFormData("form1");
	var URL = "update.php";
	ajaxLoad('get', URL, data, null);
}
function ajaxCall2() { 
	var data = getFormData("form1");
	var URL = "update2.php";
	ajaxLoad('get', URL, data, "AAA");
}
function removeOption() {
	var el = document.getElementById('major');
	while(el.length>0) {
		el.options[0] = null;
	}
}
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="insert_user.php">
  
  <p>ชื่อ-สกุล(ภาษาไทย) <input name="Tname" type="text" /></p>
  <p>First-Name - Last-Name <input name="Ename" type="text" /></p>
  <p>เลขประจำตัวประชาชน() <input name="id_card" type="text" /></p>
  <p>Passport <input name="id_passport" type="text" /> </p>
  <p>รหัสประจำตัวบุคลากร/นักศึกษา <input name="id_code" type="text" /></p>
  <p>คณะ/ศุนย์/สำนัก  <select name="de" id="de" onchange ="ajaxCall()" >
 	<? 
  		
	$sql = "select * from $table";
	
	$result = mysql_query($sql);	
		 
		 while($data = mysql_fetch_object($result)){
			
			 echo"<option value= '$data->D_id'>$data->D_name</object>";
			
		 }
	
	/*
	@mysql_connect("localhost","root","root") or die(mysql_error());
	$dbs =mysql_list_dbs();
	
	while(list($db) = mysql_fetch_row($dbs)){
		
		
		echo "<option value=$db>$db</option>";
	}
	*/
   ?>
  </select></p>
  <p>โปรแกรมวิชา <select name="major" id="major" onchange="ajaxCall2()">
    <option>1</option>
  </select></p>

<p> วันเดือนปีเกิด วันที่ 
    <select name="DD">
      
      <?
	  for($i=1;$i<=31;$i++){
	  ?>
      <option value="<? echo "$i"; ?>"><? echo "$i";  ?></option>
      <?
       }
	   ?>
  </select> 
    เดือน  
    <select name="MM">
      <option value="1">มกราคม</option>
      <option value="2">กุมภาพันธ์</option>
      <option value="3">มีนาคม</option>
      <option value="4">เมษายน</option>
      <option value="5">พฤษภาคม</option>
      <option value="6">มิถุนายน</option>
      <option value="7">กรกฎาคม</option>
      <option value="8">สิงหาคม</option>
      <option value="9">กันยายน</option>
      <option value="10">ตุลาคม</option>
      <option value="11">พฤศจิกายน</option>
      <option value="12">ธันวาคม</option>
    </select> 
  ปี 
  <select name="YYYY">
    </p>
    <?
  for($i=2557,$k=2014;$i>=2467;$i--,$k--){
	?>
    <option value="<? echo "$k"; ?>"><? echo "$i";  ?></option>
    <?
  }
  ?>
  </select>
  </p>

  <p>สถานะผู้สมัคร </p>
  <p>
  <?
  		$sql = "select * from type";
	
	$result = mysql_query($sql);	
		 
		 while($data = mysql_fetch_object($result)){
			
			 echo"<input name='type' type='radio' value= '$data->T_id'/> $data->T_name";
			
		 }
	
  ?>

  <p>เบอร์โทรศัพท์ <input name="tel" type="text" maxlength="9" /> 
    (05xxxxxxx)</p>
  <p>มือถือ <input name="tel2" type="text" maxlength="10" /> 
  (08xxxxxxx)</p>
  <p>Email Address <input name="email" type="text" /></p>
  
    <input type="submit" name="submit" id="submit" value="บันทึกข้อมูล" />
    <input type="button"  onclick="window.location.href='login.php'" value="ยกเลิก" />
  </p>
    

</form>
<div id="hidden_div" style="display: none;">Hello hidden content</div>
<div id="AAA"></div>
<script> ajaxCall(); </script>


</body>
</html>
