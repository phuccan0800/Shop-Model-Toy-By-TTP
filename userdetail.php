<?php 
	require_once ('config/session.php');
	require_once ('lib/function.php');

	$sql = "SELECT * FROM customers WHERE customerid=" . $_SESSION['sess_customerid'];
	$row = getData($sql);


?>

	<div class="productlist">  
        <div class="products">
        	
        	<div class="product_table">	
                <form method="post" action="?page=useredit&cart=<?php  echo($GLOBALS['cart']) ?>">
                <table width="500" border="0" cellspacing="0" cellpadding="0">
                <tr height="20px">
                <td colspan="2"><strong>---Personal Details---</strong></td>
                </tr>
                <tr height="20px">
                <td width="200">First Name:</td>
                <td width="300"><?php  echo($row[0]['firstname']); ?></td>
                </tr>
                <tr height="20px">
                <td>Last Name:</td>
                <td><?php  echo($row[0]['lastname']); ?></td>
                </tr>
                <tr height="20px">
                <td>Email Address:</td>
                <td><?php  echo($row[0]['email']); ?></td>
                </tr>
                <tr height="20px">
                <td>Gender:</td>
                <td>
				<?php  	
					if($row[0]['sex'] == 0){
						echo('Female'); 
					}
					else{
						echo('Male'); 
					}
				?>
                 </td>
                </tr>
                <tr height="20px">
                <td colspan="2"><strong>---Address---</strong></td>
                </tr>
                <tr height="20px">
                <td>Address:</td>
                <td>
				<?php  echo($row[0]['address']); ?>
                <input type="hidden" name="address" id="address" value="<?php  echo($row[0]['address']); ?>" />
                </td>
                </tr>
                <tr height="20px">
                <td>Post Code:</td>
                <td>
				<?php  echo($row[0]['postcode']); ?>
                <input type="hidden" name="postcode" id="postcode" value="<?php  echo($row[0]['postcode']); ?>" />
                </td>
                </tr>
                <tr height="20px">
                <td>City:</td>
                <td>
				<?php  echo($row[0]['city']); ?>
                <input type="hidden" name="city" id="city" value="<?php  echo($row[0]['city']); ?>" />
                </td>
                </tr>
                
                <tr height="20px">
                <td>Country:</td>
                <td>
				<?php 
                    $sql = "SELECT * FROM countrylist WHERE CountryID=". $row[0]['country'];
                    $country = getData($sql);
					echo($country[0][1]);
                ?>
                <input type="hidden" name="country" id="country" value="<?php  echo($row[0]['country']); ?>" />
                </td>
                </tr>

                <tr height="20px">
                <td colspan="2"><strong>Your Contact Information</strong></td>
                </tr>
                <tr height="20px">
                <td>Phone Number:</td>
                <td>
				<?php  echo($row[0]['phone']); ?>
                <input type="hidden" name="phone" id="phone" value="<?php  echo($row[0]['phone']); ?>" />
                </td>
                </tr>
                <tr height="20px">
                <td>Fax Number:</td>
                <td>
				<?php  echo($row[0]['fax']); ?>
                <input type="hidden" name="fax" id="fax" value="<?php  echo($row[0]['fax']); ?>" />
                </td>
                </tr>

                <tr height="45px" align="left">
                <td colspan="2">
                <input class='button5' type="button" value="Continue Shopping" onclick="javascript:window.location='?page=productlist&cart=<?php  echo($GLOBALS['cart']) ?>'" />&nbsp;
                <input class='button5' type="button" value="View Cart" onclick="javascript:window.location='?page=addcart&cart=<?php  echo($GLOBALS['cart']) ?>'" />&nbsp;
                <input class='button5' type="submit" value="Update Profile" />&nbsp;
                <input class='button5' type="button" value="Order History" onclick="javascript:window.location='?page=orderhistory&cart=<?php  echo($GLOBALS['cart']) ?>'" />
                </td>
                </tr>

              </table>
                </form>
              
</div>
        </div> 
    </div>
