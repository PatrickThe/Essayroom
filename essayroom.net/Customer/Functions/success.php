<?php
// Include configuration file
include_once 'config.php';

// Include database connection file
include_once 'dbConnect.php';
 require_once("include/connection.php");
// If transaction data is available in the URL
if(!empty($_GET['item_number']) && !empty($_GET['tx']) && !empty($_GET['amt']) && !empty($_GET['cc']) && !empty($_GET['st'])){
	// Get transaction information from URL
	$item_number = $_GET['item_number']; 
	$txn_id = $_GET['tx'];
	$payment_gross = $_GET['amt'];
	$currency_code = $_GET['cc'];
	$payment_status = $_GET['st'];
	
	// Get product info from the database
	//$productResult = $db->query("SELECT * FROM products WHERE id = ".$item_number);
	//$productRow = $productResult->fetch_assoc();
	
	// Check if transaction data exists with the same TXN ID.
	$prevPaymentResult = $db->query("SELECT * FROM payments WHERE txn_id = '".$txn_id."'");

	if($prevPaymentResult->num_rows > 0){
		$paymentRow = $prevPaymentResult->fetch_assoc();
		$payment_id = $paymentRow['payment_id'];
		$payment_gross = $paymentRow['payment_gross'];
		$payment_status = $paymentRow['payment_status'];
	}else{
		// Insert tansaction data into the database
		$insert = $db->query("INSERT INTO payments(item_number,txn_id,payment_gross,currency_code,payment_status) VALUES('".$item_number."','".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')");
		$payment_id = $db->insert_id;
      
       //date_default_timezone_set('Africa/Nairobi');
        //$date = date('Y-m-d H:i:s');
		 mysqli_query($conn,"update order_file set paid_status='1',status='2' where order_id='$item_number'")or die(mysqli_error($conn));
	}
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<title>essayroom</title>
<meta charset="utf-3">

<!-- Stylesheet file -->
<link href="css/style.css" rel="stylesheet">
</head>
<script type="text/javascript">
	
	setTimeout(function () {
   window.location.href= 'dashboard.php'; // the redirect goes here

},5000);
</script>
	<style type="text/css">

.a{
background-color:#33CCFF;
height: 450px;
width: 800px;
margin: 1px 0px 0px 150px;
border:5px solid ;
border-style: dotted;
float: center;
}
.b{
background-color:#33CCFF;
height: 70px;
width: 200px;
margin: 1px 10px 0px 150px;
border:2px solid ;
border-style: solid;
float: right;
}

</style>
</head>
<h4 align="center">Print (CTRL+P) & cut this Reciept at your choice</h4>
<div class="a">
<div class="b">
<center>
<SPAN style="BORDER-LEFT: black 0.05in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.09in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.01in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.04in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: balck 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.03in solid; DISPLAY: inline-block;HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.02in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.03in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.05in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.09in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.01in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.07in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: balck 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.03in solid; DISPLAY: inline-block;HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.08in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.03in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.07in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: balck 0.06in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.03in solid; DISPLAY: inline-block;HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.08in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>

</center>
<div id="externalbox" style="width:4in">
<div id="inputdata">
	<?php echo $txn_id;?>-<?php echo $item_number;?></div>
</div>

</div>
<body>
	<h2 Align="left" font face="Courier New", Courier, monospace Color="Green">&nbsp;&nbsp;Essayroom Order payment reciept</br></br>&nbsp;&nbsp;&nbsp;COSTUMER'S COPY</font></h2>
<h1 align="center"><font face="Franklin Gothic Medium" Color="black" size="3">
<table border=1 align=center widht="100%">
	<tr>
<div class="container">
	<div class="status">
		<?php if(!empty($payment_id)){ ?>
			<h1 class="success">Your Payment RECIEPT</h1>
			<p><b>Reference Number:</b> <?php echo $payment_id; ?></p>
			<p><b>Transaction ID:</b> <?php echo $txn_id; ?></p>
			<p><b>Paid Amount:</b> <?php echo $payment_gross; ?></p>
			<p><b>Payment Status:</b> <?php echo $payment_status; ?></p>
			
			<h4>Product Information</h4>
			<p><b>ORDER NUMBER:</b> <?php echo $item_number; ?></p>
			<p><b>AMOUNT PAID:</b> <?php echo $payment_gross; ?></p>
		<?php }else{ ?>
			<h1 class="error">Your Payment has Failed</h1>
		<?php } ?>
	</div>

</div>
</tr>
</table>
	<a href="dashboard.php" class="btn-link">Back to Profile</a>
</div>

</body>
</html>