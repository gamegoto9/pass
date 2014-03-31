<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery ui datepickerภาษาไทย ปี พ.ศ.</title>

<link type="text/css" rel="stylesheet" href="jquery/jquery-ui.css" />  
<style type="text/css">  
/* ปรับขนาดตัวอักษรของข้อความใน tabs  
สามารถปรับเปลี่ยน รายละเอียดอื่นๆ เพิ่มเติมเกี่ยวกับ tabs 
*/  
.ui-tabs{  
    font-family:tahoma;  
    font-size:11px;  
}  
</style>  
<style type="text/css">
/* Overide css code กำหนดความกว้างของปฏิทินและอื่นๆ */
.ui-datepicker{
	width:220px;
	font-family:tahoma;
	font-size:11px;
	text-align:center;
}
</style>
</head>

<body>


<div style="margin:auto;width:50%;">

<input name="dateInput3" type="text" id="dateInput3" value="" />

</div>
<script src="jquery/jquery.min.js"></script>
<script src="jquery/jquery-ui.min.js"></script>
<script src="js/jqueryui_datepicker_thai.js"></script>
<script type="text/javascript">
$(function(){
	$("#dateInput3").datepicker({
		dateFormat: 'dd-mm-yy',
		showOn: 'button',
//		buttonImage: 'http://jqueryui.com/demos/datepicker/images/calendar.gif',
		buttonImageOnly: false,
		changeMonth: true,
		changeYear: true
	});			
});
</script>

</body>
</html>
