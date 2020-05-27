<?php
$id = $_REQUEST['id'];
$product = loadModel('product');
$data = array(
			'status'=>0,
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['id']
				);

$product->product_update($data,$id);
set_flash('thongbao',' Xóa Thành công');
redirect('index.php?option=product');
 ?>