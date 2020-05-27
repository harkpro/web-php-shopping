<?php
$id = $_REQUEST['id'];
$feedback = loadModel('feedback');
$row = $feedback->feedback_rowid($id);
$feedback->feedback_delete($id);
set_flash('thongbao',' xóa thành công');
redirect('index.php?option=feedback&cat=trash');
 ?>