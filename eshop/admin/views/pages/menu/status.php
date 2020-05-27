<?php
$id = $_REQUEST['id'];
echo $id;
$menu = loadModel('menu');
$row = $menu->menu_rowid($id);
	
$tt = ($row['status']==1)?2:1;
$data = array(
			'status'=>$tt,
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['user_id']
				);

$menu->menu_update($data,$id);
set_flash('thongbao',' Thay Đổi Trạng Thái Thành Công');
redirect('index.php?option=menu');
 ?>