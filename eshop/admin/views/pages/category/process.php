<?php
$category = loadModel('category');
if(isset($_POST['THEM']))
{
	$slug=str_slug($_POST['name']);
	$data = array(
			'parentid'=>$_POST['catid'],
			'name'=>$_POST['name'],
			'slug'=>$slug,
			'orders'=>$_POST['order'],
			'metakey'=>$_POST['metakey'],
			'metadesc'=>$_POST['metadesc'],
			'created_at'=>date('y-m-d h:i:s'),
			'created_by'=>$_SESSION['user_id'],
			'status'=>$_POST['status'],
				);
	if($category->category_exits_slug($slug)==true)
			{
			$category->category_insert($data);
			set_flash('thongbao',' Lưu thành công');
			}
	else
	{
		set_flash('thongbao',' Tên đã tồn tại');
	}
		redirect('index.php?option=category');	
}

//close  'THEM'

if(isset($_POST['CAPNHAT']))
{

	$id=$_POST['id'];
	$row=$category->category_rowid($id);
	$slug=str_slug($_POST['name']);
	$data = array(
			'parentid'=>$_POST['parentid'],
			'name'=>$_POST['name'],
			'slug'=>$slug,
			'metakey'=>$_POST['metakey'],
			'metadesc'=>$_POST['metadesc'],
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['user_id'],
			'status'=>$_POST['status'],
				);
	if($category->category_exits_slug($slug,$id)==true)
			{			
			$category->category_update($data,$id);
			set_flash('thongbao',' Cập Nhật thành công');
			}
	else
	{
		set_flash('thongbao',' tên đã tồn tại');
	}
		 redirect('index.php?option=category');	
}

 ?>
