<?php 
	session_start();
	require_once('lib/function.php');
	

	if($action != 'empty' && $_SESSION['sess_customerid'] != ''){
		$sql = "SELECT * FROM orders WHERE remark='pending' AND customerid=".(int)($_SESSION['sess_customerid']);
		$ordercount = getRowCount($sql);
		$order = getData($sql);

		for($i=0; $i< $ordercount; $i++){ 
			$GLOBALS['totalitems'] = $GLOBALS['totalitems'] +  $order[$i]['qty'];
		}		
	}
	else{
		$GLOBALS['totalitems']= 0;
	}
?>

<div class="top_banner">
<div class="logo">
<a href="index.php">
<img src="img/logo.png" /></a></div>

</div>
