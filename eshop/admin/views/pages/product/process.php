<?php
$product = loadModel('product');
if(isset($_POST['THEM']))
{
	$slug=str_slug($_POST['name']);
	$data = array(
			'catid'=>$_POST['catid'],
			'name'=>$_POST['name'],
			'slug'=>$slug,
			'detail'=>$_POST['detail'],
			'metakey'=>$_POST['metakey'],
			'metadesc'=>$_POST['metadesc'],
			'number'=>$_POST['number'],
			'price'=>$_POST['price'],
			'pricesale'=>$_POST['pricesale'],
			'created_at'=>date('y-m-d h:i:s'),
			'created_by'=>$_SESSION['user_id'],
			//'img'=>$_POST[''],
			'status'=>$_POST['status'],
				);
	//upload file
	if($product->product_exits_slug($slug)==true)
			{
			$file_name=$_FILES['img']['name'];
			$nameimg=$slug.'.'.get_duoi($file_name);
			$file_tmp=$_FILES['img']['tmp_name'];
			move_uploaded_file($file_tmp, '../public/img/'.$nameimg);
			$data['img']=$nameimg;
			//print_r($data);
			$product->product_insert($data);
			set_flash('thongbao',' Lưu thành công');

			}
	else
	{
		set_flash('thongbao',' Tên đã tồn tại');
	}
		redirect('index.php?option=product');	
}

//close  'THEM'
//
//
if(isset($_POST['CAPNHAT']))
{

	$id=$_POST['id'];
	$row=$product->product_rowid($id);
	$slug=str_slug($_POST['name']);
	$data = array(
			'catid'=>$_POST['catid'],
			'name'=>$_POST['name'],
			'slug'=>$slug,
			'detail'=>$_POST['detail'],
			'metakey'=>$_POST['metakey'],
			'metadesc'=>$_POST['metadesc'],
			'number'=>$_POST['number'],
			'price'=>$_POST['price'],
			'pricesale'=>$_POST['pricesale'],
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['user_id'],
			//'img'=>$_POST[''],
			'status'=>$_POST['status'],
				);
	if($product->product_exits_slug($slug,$id)==true)
			{
				if(strlen($_FILES['img']['name'])!=0)
				{
					if(file_exists('../public/img/'.$row['img']))
						{
							unlink('../public/img/'.$row['img']);
						}
							$file_name=$_FILES['img']['name'];
							$nameimg=$slug.'.'.get_duoi($file_name);
							$file_tmp=$_FILES['img']['tmp_name'];
							move_uploaded_file($file_tmp, '../public/img/'.$nameimg);
							$data['img']=$nameimg;
				}			
			$product->product_update($data,$id);
			set_flash('thongbao',' Cập Nhật thành công');
			}
	else
	{
		set_flash('thongbao',' tên đã tồn tại');
	}
		redirect('index.php?option=product');	
}

 ?>
