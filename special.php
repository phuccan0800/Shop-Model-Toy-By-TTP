<?php 
	require_once ('lib/function.php');

	$sql = "SELECT * FROM products ORDER BY productid desc";
	$rowcount = getRowCount($sql);
	$row = getData($sql);
	
	$show_row = rand(0, $rowcount-1);
?>
    <div class="submenu2">
    
    <div class="menutitle">
    <div class="text">
    <div class="text3">
    <strong>NEW PRODUCT</strong></div>
    </div>
    </div>
    
    <div class="description">
		<div class="image">
      	<a href="?page=productdetail&cart=<?php  echo($GLOBALS['cart']) ?>&pid=<?php  echo($row[$show_row]['productid']); ?>">
        <img src="img/product/<?php  echo($row[$show_row]['productimage']); ?>" />
		</a>        
        </div>        
	  <div class="text">
      	<a href="?page=productdetail&cart=<?php  echo($GLOBALS['cart']) ?>&pid=<?php  echo($row[$show_row]['productid']); ?>">
	  	<?php  echo($row[$show_row]['productname']); ?>
        </a>
		<br />
        Category: 
        <?php  
            $sql = "SELECT * FROM categories WHERE categoriesid=" . $row[$show_row]['categoriesid'];
            $catedata = getData($sql);
            echo($catedata[0][1]); 
        ?>
        </div>
		<div class="price">$<?php  echo($row[$show_row]['price']); ?></div>        

		<div align="center">
        <?php  if($row[$show_row]['qty'] == 0){ ?>
            <button class='button3'>Out Stock</button>
        <?php  }else{ ?>
        <a href="?page=addcart&cart=<?php  echo($GLOBALS['cart']) ?>&pid=<?php  echo($row[$show_row]['productid']); ?>">
            <button class='button3'>Add to Cart</button>
        </a>
        <?php  } ?>
        &nbsp;
        <a href="?page=productdetail&cart=<?php  echo($GLOBALS['cart']) ?>&pid=<?php  echo($row[$show_row]['productid']); ?>">
            <button class='button4'>Detail</button>
        </a>                  
        </div>
    </div>
    </div>
