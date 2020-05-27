<?php
$id = $_REQUEST['id'];
$user = loadModel('user');
$data = array(
			'status'=>0,
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['user_id'],
				);

$user->user_update($data,$id);
set_flash('thongbao',' Xóa Thành công');
redirect('index.php?option=user');
 ?>