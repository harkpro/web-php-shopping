<?php
$menu = loadModel('menu');
$category = loadModel('category');
$topic = loadModel('topic');

if(isset($_POST['THEM'])) {
	$order = $menu->menu_count_all();
	if($_POST['type'] == 'category') {
		$crow = $category->category_rowid($_POST['itemcat']);
		$name = $crow['name'];
		$link = 'index.php?option=product&cat='.$crow['slug'];
	}
	if($_POST['type'] == 'topic') {
		$trow = $topic->topic_rowid($_POST['itemtopic']);
		$name = $trow['name'];
		$link = 'index.php?option=post&cat='.$trow['slug'];
	}
	if($_POST['type'] == 'custom') {
		$name = $_POST['name'];
		$link = $_POST['link'];
	}
    $data = array(
    	'name' => $name, 
    	'link' => $link, 
    	'orders' => $order, 
    	'position' =>'mainmenu', 
    	'parentid' => '0', 
    	'created_at' => date('Y-m-d H:i:s'), 
    	'created_by' => $_SESSION['user_id'], 
    	'updated_at' => date('Y-m-d H:i:s'), 
    	'updated_by' => $_SESSION['user_id'], 
    	'status' => '1');
    $menu->menu_insert($data);
   set_flash('thongbao',' Thêm Thành Công');
    //redirect('index.php?option=menu');
}
if(isset($_POST['CAPNHAT'])) {
$id=$_POST['id'];
$data = array(
    	'name' =>$_POST['name'], 
    	'link' =>$_POST['link'], 
    	'position' =>'mainmenu', 
    	'parentid' =>$_POST['parentid'], 
    	'created_at' => date('Y-m-d H:i:s'), 
    	'created_by' => $_SESSION['user_id'], 
    	'updated_at' => date('Y-m-d H:i:s'), 
    	'updated_by' => $_SESSION['user_id'], 
    	'status' => '1');
    $menu->menu_update($data,$id);
   set_flash('thongbao',' Thêm Thành Công');
    redirect('index.php?option=menu');
}



?>