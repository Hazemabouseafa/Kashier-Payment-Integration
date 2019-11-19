<?php 
/* Order Sample */
class Order{
	public $amount = "20";
	public $currency = "USD";
	public $merchantOrderId = "1";
	public $mid = "MID-468-189";
	public $secret = "0e17c8cc-468b-4a2b-9520-bfd819df65bc";
}

$order = new Order();
function generateKashierOrderHash($order){
$mid = $order->mid; 
$amount = $order->amount; 
$currency = $order->currency; 
$orderId = $order->merchantOrderId;
$secret = $order->secret;

$path = "/?payment=".$mid.".".$orderId.".".$amount.".".$currency;
$hash = hash_hmac( 'sha256' , $path , $secret ,false);
}

$hash = generateKashierOrderHash($order);
?>