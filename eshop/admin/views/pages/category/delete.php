<?php
$id = $_REQUEST['id'];
$category = loadModel('category');
$row = $category->category_rowid($id);
$category->category_delete($id);
set_flash('thongbao',' xóa thành công');
redirect('index.php?option=category&cat=trash');
 ?>