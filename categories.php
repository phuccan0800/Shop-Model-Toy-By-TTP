
<?php
	require_once ('lib/function.php');

	$sql = "SELECT * FROM categories ORDER BY categoriesid asc";
	$rowcount = getRowCount($sql);
	$row = getData($sql);

?>
    
    <div class="submenu">
        <div class="menubg1">
            <div class="menutitle">
                <div class="text">
                    <div class="text2">
                        <strong> CATEGORIES </strong>
                    </div>
                </div>
            </div>
    
            <div class="submenutext">
                <a font-color='black' align='center' href="?page=productlist&cart=all"><div class="snip1582"> >> All << </div> </a>

		        <?php for($i = 0; $i < $rowcount; $i++){ ?>
                <a align='center' href="?page=productlist&cart=<?php echo($row[$i][0]) ?>">
                    
                <div class="snip1582">
                > <?php echo($row[$i][1]) ?> <
                </div> 
                </a>
                
		        <?php } ?>
            </div>
            <br>
        </div>
    </div>
