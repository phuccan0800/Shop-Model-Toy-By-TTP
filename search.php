<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php 
	require_once ('lib/function.php');

	$sql = "SELECT * FROM products ORDER BY productid desc";
	$rowcount = getRowCount($sql);
	$row = getData($sql);

?>
        <div class='search'>
        <?php  require("shoppingcart.php") ?>
        <br>
            <div class="findform">
    	        <form class="find" method="post" action="?page=productlist&cart=<?php echo($GLOBALS['cart']) ?>" style="margin:auto;max-width:400px; border-radius: 24px; ">
			        <input type="text" name="find" id="find" placeholder="Search.." title="Search" />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>