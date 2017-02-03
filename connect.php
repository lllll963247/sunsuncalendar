<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php 	

	mb_internal_encoding('utf-8');
	date_default_timezone_set("Asia/Taipei");
	$link = mysql_connect('localhost','sunsunc1','a102030');
	$db = mysql_select_db('sunsunc1_calendar');
	//$link = mysql_connect('sql113.byethost5.com','b5_19410795','a102030');$db = mysql_select_db('b5_19410795_sunsun');   //byethost5
	//$link = mysql_connect('localhost','id407307_lllll963247','aspirine5107');$db = mysql_select_db('id407307_sunsun'); //000webhost
	//$link = mysql_connect('localhost','root','aspirine5107');	$db = mysql_select_db('id407307_sunsun');			     //localhost
	mysql_query("set names utf8");

	if(!$link){echo('MySQL連結錯誤');}
?>
<body>
	
</body>
</html>