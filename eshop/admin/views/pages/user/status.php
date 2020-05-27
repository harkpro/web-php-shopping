<?php
$id = $_REQUEST['id'];
$user = loadModel('user');
$row = $user->user_rowid($id);
	
$tt = ($row['status']==1)?2:1;
echo $tt;
$data = array(
			'status'=>$tt,
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['id']
				);

$user->user_update($data,$id);
set_flash('thongbao',' Thay Đổi Trạng Thái Thành Công');
redirect('index.php?option=user');
 ?>