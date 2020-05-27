<?php
$id = $_REQUEST['id'];
$menu = loadModel('menu');
$data = array(
			'status'=>0,
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['id']
				);

$menu->menu_update($data,$id);
set_flash('thongbao',' Xóa Thành công');
redirect('index.php?option=menu');
 ?>