<?php
$id = $_REQUEST['id'];
$menu = loadModel('menu');
$row = $menu->menu_rowid($id);
$menu->menu_delete($id);
set_flash('thongbao',' xóa thành công');
redirect('index.php?option=menu&cat=trash');
 ?>