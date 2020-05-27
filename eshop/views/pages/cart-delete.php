<?php 
require_once ('system/core.php');
$cart=loadClass('cart');
$id=$_REQUEST['pid'];
$list_cart=$cart->cart_delete($id);
redirect('index.php?option=cart');