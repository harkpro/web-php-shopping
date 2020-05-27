<?php
$id = $_REQUEST['id'];
$user = loadModel('user');
$data = array(
			'status'=>1,
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['user_id']
				);

$user->user_update($data,$id);
set_flash('thongbao',' Khôi Phục thành công');
redirect('index.php?option=user&cat=trash');
 ?>