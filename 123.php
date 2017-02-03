<?php 
	include('connect.php');	 

	$year  = $_REQUEST["year"];
	$month = $_REQUEST["month"];
	$day   = $_REQUEST["day"];
	$time = mktime(0,0,0,$month,$day,$year);	
	$time = date('Y-m-d',$time);
	
	$sql = "SELECT name FROM moex WHERE '".$time."' BETWEEN date AND dateo";
	$sql2 = mysql_query($sql);
	$list = Array();
	while ($row = mysql_fetch_array($sql2, MYSQL_ASSOC)) {
		$list[] =  $row['name'];  
	}
	
	$sql_link = "SELECT testlink FROM moex WHERE '".$time."' BETWEEN date AND dateo";
	$sql2_link = mysql_query($sql_link);
	$list_link = Array();
	while ($row = mysql_fetch_array($sql2_link, MYSQL_ASSOC)) {
		$list_link[] =  $row['testlink'];
	}

	for($i=0;$i<count($list);$i++){
		echo '<a href='.$list_link[$i].' target="_blank" class="textcolor'.$i.'">'.$list[$i].'</a>';
		
	}

	
?>