<div class="shoppingcart">

    <strong><u>Shopping cart:</u></strong> <br />
    now in your cart: 
    
    <a href="?page=addcart&cart=<?php echo($GLOBALS['cart']) ?>">
    <strong>
	<?php 
		if($GLOBALS['totalitems'] > 1){
			echo($GLOBALS['totalitems'] . ' items'); 
		}
		else{
			echo($GLOBALS['totalitems'] . ' item'); 
		}

	?>    
    </strong>
	</a>
	<?php 
		if($_SESSION['sess_username'] != '') {
		    echo('<br /><font color="#CC0000">Welcome: <strong>' . $_SESSION['sess_username'] . '</strong></font><div class="logout"><a href="?page=logout&cart=' . $GLOBALS['cart'] . '">Logout</a></div>');
		}
		
	?>
</div>