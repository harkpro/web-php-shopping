<?php
$id = $_REQUEST['id'];
$feedback = loadModel('feedback');
$data = array(
			'status'=>1,
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['id']
				);

$feedback->feedback_update($data,$id);
set_flash('thongbao',' Khôi Phục thành công');
redirect('index.php?option=feedback&cat=trash');
 ?>