<?php 
require_once ('Config.php');
require_once ('system/load.php');
require_once ('system/core.php');
$cat=$_REQUEST['cat'];
$cart=loadClass('cart');

	$list_qty = $_POST['qty'];
	$list_pid = $_POST['pid'];
	$data=array();
	foreach ($list_pid as $key=>$id) 
	{
		$row=array(
			'id'=>$id,
			'qty'=>$list_qty[$key]
		);
		$data[]=$row;
	}
	$cart->cart_update($data);
	redirect("index.php?option=cart");
?>