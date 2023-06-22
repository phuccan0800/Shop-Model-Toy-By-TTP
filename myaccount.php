<?php
	session_start();

	if($_SESSION['sess_userid'] == "" || $_SESSION['sess_username'] ==""){
		echo("<script>window.location.href = '?page=login&cart=" . $GLOBALS['cart'] . "'; </script>");		
	}
	else{
		echo("<script>window.location.href = '?page=userdetail&cart=" . $GLOBALS['cart'] . "'; </script>");
	}
?>
