<?php 
require_once ('Config.php');
require_once ('system/load.php');
require_once ('system/core.php');

$cat=$_REQUEST['cat'];
$id=null;
if(isset($_REQUEST['pid']))
	{
		$id=$_REQUEST['pid'];
	}
$product=loadModel('product');
$cart=loadClass('cart');
if($cat=='insert')
{
	$sp=$product->product_rowid($id);
	$data=array(
		'id'=>$sp['id'],
		'name'=>$sp['name'],
		'qty'=>1,//soluong
		'price'=>$sp['price'],
		'img'=>$sp['img']
		);
		$cart->cart_insert($data);	
		$gh=$_SESSION['cart'];
		redirect("index.php?option=cart");
}

?>