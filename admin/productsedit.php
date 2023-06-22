
<?php 
 	require_once ('config/session.php');
	require_once('lib/function.php');
	$pid = $_GET['id'];
	$sql = "SELECT * FROM products WHERE productid=" . $pid;
	$pdata = getData($sql);
?>

<h3>Edit Products</h3>

<form action="?page=productsave&action=edit" method="post" onsubmit="return editaddp();">
<input type="hidden" value="<?php  echo($pdata[0]['productid']) ?>" name="pid" id="pid">

<table cellspacing="0" cellpadding="0" width="400px">
  <tr height="35px">
    <td width="200px">Product Name</td>
    <td width="200px"><input type="text" name="txtpname" id="txtpname" value="<?php  echo($pdata[0]['productname']) ?>"></td>
  </tr>
  <tr height="35px">
    <td>Product Description</td>
    <td><textarea name="txtpdes" rows="5" id="txtpdes" value="<?php  echo($pdata[0]['productdes']) ?>"><?php  echo($pdata[0]['productdes']) ?></textarea></td>
  </tr>
  <tr height="35px">
    <td>Categories</td>
    <td>
	<?php 
		$sql = "SELECT * FROM categories";
		$rowcount = getRowCount($sql);
		$row = getData($sql);
	?>
  
    <select name="txtcate" id="txtcate">
    <?php 
		for($i = 0; $i < $rowcount; $i++){
			if($row[$i][0] == $pdata[0]['categoriesid'])
			{
	?>
            <option value="<?php  echo($row[$i][0]); ?>" selected><?php  echo($row[$i][1]); ?></option>
	<?php 		}
			else
			{
	?>
            <option value="<?php  echo($row[$i][0]); ?>"><?php  echo($row[$i][1]); ?></option>
	<?php  }} ?>    
    </select>
    </td>
  </tr>
  <tr height="35px">
    <td>Price</td>
    <td><input type="text" name="txtprice" id="txtprice" value="<?php  echo($pdata[0]['price']) ?>"></td>
  </tr>
  <tr height="35px">
    <td>Quanity</td>
    <td><input type="text" name="txtqty" id="txtqty" value="<?php  echo($pdata[0]['qty']) ?>"></td>
  </tr>
  <tr height="35px" align="center">
    <td colspan="2">
    	<input type="submit" value="Save">
        <input type="button" value="Back" onClick="javascript:history.back();">
	</td>
  </tr>
</table>
</form>
