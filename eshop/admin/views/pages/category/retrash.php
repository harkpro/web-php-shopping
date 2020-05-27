<?php
$id = $_REQUEST['id'];
$category = loadModel('category');
$data = array(
			'status'=>2,
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['id']
				);

$category->category_update($data,$id);
set_flash('thongbao',' Khôi Phục thành công');
redirect('index.php?option=category&cat=trash');
 ?>