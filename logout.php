<?
session_start();

if(isset($_SESSION['user'])){
	
	unset($_SESSION['user']);
	
	header("Refresh : 3;url = login.php");
	echo "<h3>ท่านได้ออกจากระบบแล้ว จะกลับสู่หน้าหลักภายใน 3 วินาที </h3>";
	echo $_SESSION['user'];
	
}
else{
	header("Refresh : 3;url = login.php");
	echo "<h3>ระบบไม่สามารถทำงานได้ จะกลับสู่หน้าหลักภายใน 3 วินาที </h3>";

	exit;
}
?>
