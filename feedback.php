<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php		
	if(isset($_POST['content']))
	{	
	include('connect.php');	 
	if(!$link){echo('MySQL連結失敗<br>');}

mysql_query("SET NAMES 'UTF8'");
mysql_query("SET CHARACTER SET UTF8");
mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");

	mysql_query('set content utf8');
	mysql_query("SET NAMES 'UTF8'");
	mysql_query('SET CHARACTER SET utf8');
	mb_internal_encoding('utf-8');
	
	$sql = "INSERT INTO feedback (content)  VALUES ('{$_POST['feedbackcontent']}')";
	
	if($_POST['feedbackcontent']==""){echo("<script> alert('不可空白'); location.href = 'index.html'; </script>");}
	else{
		$query = mysql_query($sql)or die('失敗');
		echo "<script>alert('你的意見我們收到囉，感謝你的回饋！'); location.href = 'index.html';</script>";
		}
	}
	else
		echo('請先執行表單網頁');
	mysql_close($link);
?>
</body>
</html>