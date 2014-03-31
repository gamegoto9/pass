<?
include("conn.php");

$id_code = $_GET["id_code"];

$sql = "select * from user where U_id_code = '$id_code'";
$result = mysql_query("$sql");

$tname="";
$ename="";
$id="";
$pass="";
$tel="";
$tel2="";
$email="";
$type="";
$d="";
$mm="";
$yyyy="";
$B_date="";
while($data = mysql_fetch_array($result)){
	$tname = $data["U_Tname"];	
	$ename = $data["U_Ename"];	
	$id = $data["U_id"];	
	$pass = $data["U_passport"];	
	$major = $data["M_id"];
	$tel = $data["tel"];
	$tel2 = $data["tel2"];
	$email = $data["email"];
	$type = $data["T_id"];
	$B_date = $data["U_Bdate"];
}

		
		 $d =substr($B_date,8,2);
		 $mm=substr($B_date,5,2);
		 
		 $yyyy = substr($B_date,0,4)+543;

$sql = "select * from major where M_id = $major";
$result = mysql_query("$sql");
$dd = mysql_result($result,0,"D_id") or die(mysql_error());
$mn = mysql_result($result,0,"M_name") or die(mysql_error());



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
<form id="form1" name="form1" method="post" action="edit_user_.php" onclick="ajaxCall2();">
  
  <p>ชื่อ-สกุล(ภาษาไทย) <input name="Tname" type="text" value="<?=$tname; ?>"/></p>
  <p>First-Name - Last-Name <input name="Ename" type="text" value="<?=$ename; ?>"/></p>
  <p>เลขประจำตัวประชาชน() <input name="id_card" type="text"  value="<?=$id; ?>" /></p>
  <p>Passport <input name="id_passport" type="text" value="<?=$pass; ?>"/> </p>
  <p>รหัสประจำตัวบุคลากร/นักศึกษา <input name="id_code1" type="text"  value="<?=$id_code; ?>" disabled="true"/>
  <input name="id_code" type="hidden"  value="<?=$id_code; ?>"/>
  </p>
  <p>คณะ/ศุนย์/สำนัก  <select name="de" id="de" onchange ="ajaxCall()" >
 	<? 
  		
	
	$sql = "select * from department";
	
	$result = mysql_query($sql);	
		 
		 while($data = mysql_fetch_object($result)){
			
			if($data->D_id == $dd){
				
				
				echo"<option value= '$data->D_id' selected='selected'>$data->D_name</object>";
			}else
			{
				 echo"<option value= '$data->D_id'>$data->D_name</object>";
			}
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
    
    <input type="hidden" name="major2" id="major2" value="<?=$major; ?>" />

<p> วันเดือนปีเกิด วันที่ 
    <select name="DD">
      
      <?
	  for($i=1;$i<=31;$i++){
		  if($i == $d)
		  {
	  ?>
      <option value="<? echo "$i"; ?>" selected="<?=$d; ?>"><? echo "$i";  ?></option>
      <?
		  }else{
			  ?>
			  <option value="<? echo "$i"; ?>"><? echo "$i";  ?></option>
              <?
		  }
       }
	   ?>
  </select> 
    เดือน  
    <select name="MM">
    <?
		$mount = array("มกราคม", "กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		
		for($i=0,$r=1;$r<=12;$r++,$i++){
			
			if($r == $mm){
			?>
             <option value="<?=$r?>" selected="selected"><?=$mount[$i]; ?></option>
             <?
			}else{
				?>
                <option value="<?=$r?>"><?=$mount[$i]; ?></option>
                <?
			}
		}
	?>
  
  </select> 
  ปี 
  <select name="YYYY">
    </p>
    <?
  for($i=2557,$k=2014;$i>=2467;$i--,$k--){
	
	 if($i == $yyyy){
	?>
     <option value="<? echo "$k"; ?>" selected="selected"><? echo "$i";  ?></option>
    
    <?
  }else{
	  ?>
      <option value="<? echo "$k"; ?>"><? echo "$i";  ?></option>
  <?
  }
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
			
			if($data->T_id == $type){
				echo"<input name='type' type='radio' value= '$data->T_id' checked/> $data->T_name";
			}else{
			 echo"<input name='type' type='radio' value= '$data->T_id'/> $data->T_name";
			}
		 }
	
  ?>

  <p>เบอร์โทรศัพท์ <input name="tel" type="text" maxlength="9" value=<?=$tel;  ?> > 
    (05xxxxxxx)</p>
  <p>มือถือ <input name="tel2" type="text" maxlength="10" value=<?=$tel2;  ?>> 
  (08xxxxxxx)</p>
  <p>Email Address <input name="email" type="text" value=<?=$email;  ?>></p>
 
    <center><input name="Submit"  type="submit" value="แก้ไข" />
   <input type="button"  onclick="window.location.href='delete_user.php?id_code=<?=$id_code ?>'" value="ลบ" />
    <input type="button" onclick="window.location.href='confirm.php?id_code=<?=$id_code ?>'" value="อนุมัติ">
  <input type="button"  onclick="window.location.href='new.php?id_code=1111'" value="ยกเลิก" /></center>
  </p>
    

</form>
<div id="AAA"></div>

<script> ajaxCall(); </script>


</body>
</html>
