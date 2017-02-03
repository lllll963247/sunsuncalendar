<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>
<?php 
	include('connect.php');	 
	
	$search = $_POST['search'];
	$sql = "select date from moex where name like '%".$search."%'";
	$sql2 = mysql_query($sql);
	$row = mysql_fetch_row($sql2);
	
	if($row[0]==""){echo '查無資料或考試資訊尚未公布';}
	else{
		
	}
	
	
?>
<body>
</body>
</html>