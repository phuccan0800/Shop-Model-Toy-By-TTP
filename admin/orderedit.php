<?php 
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$orderid = $_GET['id'];
	$pid = $_GET['pid'];

	$sql= "SELECT * FROM orders WHERE orderid='$orderid' AND productid='$pid'";
	$row = getData($sql);
	
?>

<h3>Edit Order</h3>

<form action="?page=ordersave" method="post" onsubmit="return validorder();">

<input type="hidden" value="<?php  echo($orderid) ?>" name="orderid" id="orderid">
<input type="hidden" value="<?php  echo($pid) ?>" name="pid" id="pid">

<table cellspacing="0" cellpadding="0" width="399">
  <tr height="30px">
    <td width="120">Order ID:</td>
    <td width="278"><?php  echo($row[0]['orderid']); ?></td>
  </tr>
  <tr height="30px">
    <td width="120">Customer Name:</td>
    <td width="278">
	<?php 
		$sql = "SELECT * FROM customers WHERE customerid=" . $row[0]['customerid'];
		$customer = getData($sql);
		echo('<a href="home.php?page=customers&cid=' . $row[0]['customerid'] . '">' . $customer[0]['firstname'] . '</a>');
	?>    
    </td>
  </tr>
  <tr height="30px">
    <td width="120">Product Name:</td>
    <td width="278">
	<?php 
		$sql = "SELECT * FROM products WHERE productid=" . $row[0]['productid'];
		$product = getData($sql);
		echo('<a href="home.php?page=products&pid=' . $row[0]['productid'] . '">' . $product[0]['productname'] . '</a>');
	?>    
    </td>
  </tr>
  <tr height="30px">
    <td>Price:</td>
    <td>
    $<?php  echo($product[0]['price']); ?>
	<input type="hidden" value="<?php  echo($product[0]['price']); ?>" name="txtprice" id="txtprice">
    </td>
  </tr>
  <tr height="30px">
    <td>Qty:</td>
    <td><input type="text" name="txtqty" id="txtqty" value="<?php  echo($row[0]['qty']) ?>" onchange="javascript:txtsubtotal.value= +txtprice.value * txtqty.value;txttax.value=((txtprice.value * txtqty.value)/100)*7;"></td>
  </tr>
  <tr height="30px">
    <td>Subtotal:</td>
    <td><input type="text" name="txtsubtotal" id="txtsubtotal" value="<?php  echo($row[0]['subtotal']) ?>" readonly="readonly"></td>
  </tr>
  <tr height="30px">
    <td>Tax (<?php  echo(tax) ?>%):</td>
    <td><input type="text" name="txttax" id="txttax" value="<?php  echo($row[0]['tax']) ?>" readonly="readonly"></td>
  </tr>

  <tr height="30px">
    <td>Shipment:</td>
    <td>
	<?php 
		$sql = "SELECT * FROM shipment";
		$shipmentcount = getRowCount($sql);
		$shipment = getData($sql);
	?>
  
    <select name="txtshipment" id="txtshipment">
    <?php 
		if($row[0]['paymentid'] == 0){
			echo('<option selected value="0">_</option>');
		}
		for($i = 0; $i < $shipmentcount; $i++){
			if($shipment[$i][0] == $row[0]['shipmentid'])
			{
	?>
          <option value="<?php  echo($shipment[$i]['shipmentid']); ?>" selected><?php  echo($shipment[$i]['shipmentname']); ?></option>
	<?php 		}
			else
			{
	?>
            <option value="<?php  echo($shipment[$i]['shipmentid']); ?>"><?php  echo($shipment[$i]['shipmentname']); ?></option>
	<?php  }} ?>    
    </select>
    </td>
  </tr>
  <tr height="30px">
    <td>Payment:</td>
    <td>
	<?php 
		$sql = "SELECT * FROM payment";
		$paymentcount = getRowCount($sql);
		$payment = getData($sql);
	?>
  
    <select name="txtpayment" id="txtpayment">
    <?php 
		if($row[0]['paymentid'] == 0){
			echo('<option selected value="0">_</option>');
		}
		for($i = 0; $i < $paymentcount; $i++){
			if($payment[$i][0] == $row[0]['paymentid'])
			{
	?>
          <option value="<?php  echo($payment[$i]['paymentid']); ?>" selected><?php  echo($payment[$i]['paymentname']); ?></option>
	<?php 		}
			else
			{
	?>
            <option value="<?php  echo($payment[$i]['paymentid']); ?>"><?php  echo($payment[$i]['paymentname']); ?></option>
	<?php  }} ?>    
    </select>
    </td>
  </tr>

  <tr height="30px">
    <td>Status:</td>
    <td>
    	<select name="txtstatus" id="txtstatus">
			<?php  if($row[0]['remark'] == 'pending'){ ?>
                <option selected="selected" value="pending">pending</option>
            <?php  } else { ?>
                <option value="pending">pending</option>
			<?php  } ?>

			<?php  if($row[0]['remark'] == 'paid'){ ?>
                <option selected="selected" value="paid">paid</option>
            <?php  } else { ?>
                <option value="paid">paid</option>
			<?php  } ?>

			<?php  if($row[0]['remark'] == 'shipping'){ ?>
                <option selected="selected" value="shipping">shipping</option>
            <?php  } else { ?>
                <option value="shipping">shipping</option>
			<?php  } ?>

			<?php  if($row[0]['remark'] == 'delivered'){ ?>
                <option selected="selected" value="delivered">delivered</option>
            <?php  } else { ?>
                <option value="delivered">delivered</option>
			<?php  } ?>
        </select>
    </td>
  </tr>

  <tr height="30px" align="center">
    <td colspan="2">
    	<input type="submit" value="Save">
        <input type="button" value="Back" onClick="javascript:history.back();">
	</td>
  </tr>
</table>
</form>
