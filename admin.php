<?
session_start();
if(isset($_SESSION['user'])){
	echo $_SESSION['user'];
}else
{
	header("Refresh : 3;url = login.php");
	echo "<h3>ระบบไม่สามารถทำงานได้ จะกลับสู่หน้าหลักภายใน 3 วินาที </h3>";
	echo "</body></html>";
	exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
	<p align="right"><a href='logout.php'>ออกจากระบบ</a></p>
  <a href="new.php">สมาชิกใหม่</a><p>
  <a href="search.php">ค้นหา</a><p>
   <a href="detial/detail_date.php"> รายงานสรุปจำนวนผู้ของใช้ประจำวัน</a><p>
   <a href="detial/detail_date_date.php?i=2"> รายงานสรุปจำนวนผู้ของใช้ตามช่วงเวลาที่กำหนด</a><p>
   <a href="detial/detail_date_date.php?i=3"> สถานะของผู้สมัคร</a><p>
   <a href="detial/detail_date_date.php?i=4"> หน่วยงาน</a><p>

</form>
</body>
</html>
