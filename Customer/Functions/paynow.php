<?php
include('payPalRepository.php');

$paypal = new PaypalRepository('http://localhost/essayfinal/Customer/Functions/paynow.php','http://localhost/essayfinal/Customer/Functions/paynow.php');
if(isset($_GET['paymentId'])){
	$paymentId = $_GET['paymentId'];
	$payerId= $_GET['PayerID'];
	//$item_id= $_GET['item_id'];
	$response = $paypal->execute($payerId,$paymentId);


include('include/connection.php');
mysqli_query($conn,"INSERT INTO payment_details(payment_method,amount,item_id) VALUES('Paypal','$paymentId','$payerId')")or die(mysqli_error($conn));
    
include('dashboard.php');
	exit;
}elseif(isset($_GET['token'])){
	echo "pre/";
	echo "You canceled the payment. Please try again later!";

	echo "pre/";
	exit;
}
$amount = $_GET['amount'];
$order_id = $_GET['order_id'];
$paypal->checkout('12',$amount,$order_id);
