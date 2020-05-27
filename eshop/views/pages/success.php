<?php
require_once('config.php');
require_once('system/Database.php');
require_once ('system/core.php');
?>
<?php
$order=loadModel('order');
$orderdetail=loadModel('orderdetail');
if(isset($_POST['aaa']))
{       
    $mydata=array(
        'code'=>rand(),
        'userid'=>NULL,
        'created_date'=>date('y-m-d h:i:s'),
        'exportdate'=>NULL,
        'deliveryaddress'=>$_POST['address'],
        'ShipingMethods'=>$_POST['shipping'],
        'Payments'=>$_POST['payments'],
        'deliveryname'=>$_POST['name'],
        'deliveryphone'=>$_POST['phone'],
        'deliveryemail'=>$_POST['email'],
        'status'=>2,
    );
    $order->order_insert($mydata); 
    $order_id = $order->order_insert($mydata); 
    foreach ($_SESSION['cart'] as $value){
        $sdata=array(
        'orderid'=>$order_id,
        'productid'=>$value['id'],
        'price'=>$value['price'],
        'quantity'=>$value['qty'],
        'amount'=>$value['price']*$value['qty'],
    ); 
        $orderdetail->orderdetail_insert($sdata);
            }
            unset($_SESSION['cart']);
           redirect('index.php?option=order&id='.$order_id.''); 
}
?>