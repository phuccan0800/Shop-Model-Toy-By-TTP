<?php 
	require_once ('config/session.php');

	$address = $_REQUEST['address'];
	$postcode = $_REQUEST['postcode'];
	$city = $_REQUEST['city'];
	$country = $_REQUEST['country'];
	$phone = $_REQUEST['phone'];
	$fax = $_REQUEST['fax'];
?>
	<div class="productlist">    
        <div class="products">
        	<div class="product_table">	
            <form action="?page=saveuser&action=edit" method="post" name="form" id="form">
			  <table width="592" border="0" cellspacing="0" cellpadding="0">
                <tr height="25px">
                <td colspan="2"><strong><a href="index.php?page=userdetail&cart=all"><u>Personal Details</u></a> > Update Profile </strong></td>
                </tr>
                <tr height="25px">
                <td colspan="2"><strong>Your Address</strong></td>
                </tr>
                <tr height="25px">
                <td>Address:</td>
                <td><input type="text" name="txtaddress" id="txtaddress" value="<?php  echo($address); ?>"></td>
                </tr>
                <tr height="25px">
                <td>Post Code:</td>
                <td><input type="text" name="txtpostcode" id="txtpostcode" value="<?php  echo($postcode) ?>"></td>
                </tr>
                <tr height="25px">
                <td>City:</td>
                <td><input type="text" name="txtcity" id="txtcity" value="<?php  echo($city) ?>"></td>
                </tr>
                <tr height="25px">
                <td>Country:</td>
                <td>

				<?php 
                    require_once('lib/function.php');
                    $sql = "SELECT * FROM countrylist";
                    $rowcount = getRowCount($sql);
                    $row = getData($sql);
                ?>
				<select name="txtcountry" id="txtcountry" onchange="javascript:if(country.value==188){frmpwd.style.visibility='hidden';frmpwd_text.style.visibility='hidden'}else{frmpwd.style.visibility='visible';frmpwd_text.style.visibility='visible'}">
                <option value="" SELECTED>Please Select</option>
                <?php 
                    for($i = 0; $i < $rowcount; $i++){
						if($country == $row[$i][0]){
                ?>
                        <option value="<?php  echo($row[$i][0]); ?>" selected><?php  echo($row[$i][1]); ?></option>
				<?php  }else{ ?>                		
                        <option value="<?php  echo($row[$i][0]); ?>"><?php  echo($row[$i][1]); ?></option>
            
                <?php  }} ?>    
                
                </select>

                </td>
                </tr>

                <tr height="25px">
                <td colspan="2"><strong>Your Contact Information</strong></td>
                </tr>
                <tr height="25px">
                <td>Phone Number:</td>
                <td><input type="text" name="txtphone" id="txtphone" value="<?php  echo($phone) ?>"></td>
                </tr>
                <tr height="25px">
                <td>Fax Number:</td>
                <td><input type="text" name="txtfax" id="txtfax" value="<?php  echo($fax) ?>"></td>
                </tr>

                <tr height="25px">
                <td>&nbsp;</td>
                <td><input type="submit" value="Submit" /><input type="reset" value="Reset" /></td>
                </tr>

              </table>
              
              </form>
              </div>
        </div> 
    </div>
