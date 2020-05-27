<?php
$id = $_REQUEST['id'];
$product = loadModel('product');
$row = $product->product_rowid($id);
//xoa hình
if(file_exists('../public/image/product/'.$row['img']))
{
unlink('../public/image/product/'.$row['img']);
}
$product->product_delete($id);
set_flash('thongbao',' xóa thành công');
redirect('index.php?option=product&cat=trash');
 ?>