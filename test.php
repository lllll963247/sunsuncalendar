<?php		
	if(isset($_POST['Insert']))
	{	
	include('connect.php');	 
	if(!$link){echo('MySQL連結失敗<br>');}
		
	$signupdate = (string)$_POST['signupdate'];
	$signupdateo = (string)$_POST['signupdateo'];
	$testdate = (string)$_POST['testdate'];
	$testdateo = (string)$_POST['testdateo'];
	
	mysql_query('SET CHARACTER SET utf8');
	mb_internal_encoding('utf-8');
	
	$sql = "INSERT INTO newtest (name,signupdate,signupdateo,sort,testdate,testdateo,testlink)  VALUES ( '{$_POST['name']}','$signupdate','$signupdateo','{$_POST['sort']}','$testdate','$testdateo','{$_POST['testlink']}')";
	
	if($_POST['name']==""){echo("<script> alert('考試名稱不可空白'); location.href = 'index.html'; </script>");}
	else{
		$query = mysql_query($sql)or die('失敗');
		echo "<script>alert('你輸入的資料我們已經收到了，會盡快審核！'); location.href = 'index.html';</script>";
		}
	}
	else
		echo('請先執行表單網頁');
	mysql_close($link);
	?>