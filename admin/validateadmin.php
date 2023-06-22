<?php 
	session_start();

	require('../lib/function.php');
	require('../config/connect.php');
	$user = $_REQUEST['username'];
	$pwd = $_REQUEST['password'];

	$sql = "SELECT * FROM admin WHERE uname='$user' and pwd='$pwd'";
	
	$num = getRowCount($sql);
	$row = getData($sql);


	{
		$_SESSION['sess_adminid'] = session_id();
		$_SESSION['sess_adminname'] = $row[0]['uname'];

		echo("<script>window.location = 'home.php';</script>");		
	}
?>