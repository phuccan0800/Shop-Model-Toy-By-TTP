<?php
	if($_SESSION['sess_customerid'] != ''){
		echo("<script>window.location = '?page=userdetail&cart=" . $GLOBALS['cart'] . "&action=empty'; </script>");		
	}

	$login = $_REQUEST['login'];
?>

	<div class="productlist"> 
        <div class="products">
        	<div class="product_table">	
              <?php 
					if($login == 'fail'){
						echo('<span class="product_table"><font color="#CC0000"><strong><u>Invalid username and password.</u></strong></font></span>');
					} 
			   ?>

			  <table width="80%" border="0" cellspacing="0" cellpadding="0">
              
                <tr height="25px" valign="top">
                <td width="50%">
                <table width="250px" border="0" cellspacing="0" cellpadding="0">
                  <tr height="130px">
                    <td>
                    
                    <h2 align='center'>New Customer</h2>
                    
                    <p>I am a new customer.</p>
					
                    <p>By creating an account at our Online Store you will be able to shop faster, be up to date on an orders status, and keep track of the orders you have previously made.</p>
                    </td>
                  </tr>
                  <tr>
                    <td align="right" class="bodylinks"><input class='button2' type="button" value="Sign Up" onclick="javascript:window.location='?page=registration&cart=<?php echo($GLOBALS['cart']) ?>'" /></td>
                  </tr>
                </table><br></td>
                
                <td align='center' width="0px" class="rightline">&nbsp;</td>

                <td width="200px">

				<form align='center' action="?page=validateuser&cart=<?php echo($GLOBALS['cart']) ?>" method="post">
                <table width="75%" border="0" cellspacing="0" cellpadding="0">
                  <tr height="130px">
                    <td>
                    
                    <h2 align='center'>Returning Customer</h2>
                    <p>
					E-mail Address:<br />
                    <input type="text" name="email" id="email" /><br />
					Password:<br />
                    <input type="password" name="password" id="password" /><br />
                    </p>

                    </td>
                  </tr>
                  <tr>
                    <td align="right" class="bodylinks"><input class='button2' type="submit" value="Sign In" /></td>
                  </tr>
                </table>
              </form>
                
                
                </td>
                </tr>
              </table>
              
              </div>
        </div>    
    </div>
