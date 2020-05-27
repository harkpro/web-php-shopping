<?php
$user = loadModel('user');
if(isset($_POST['THEM']))
{
	$error='';
	if($user->user_exits_username1($_POST['username'])==FALSE)
	{ 
		$error='<div class="alert alert-danger"> Username available </div>';
			set_flash('thongbao','Username available');
   		 	redirect('index.php?option=user&cat=insert');
	 }
	if($_POST['password1']!=$_POST['password2'])
	{ 
		$error='<div class="alert alert-danger"> Password incorrect </div>';
			set_flash('thongbao','Password incorrect');
     		redirect('index.php?option=user');
 }
if($error=='')
{
	$mydata=array(
		'username'=>$_POST['username'],
		'fullname'=>$_POST['userfullname'],
		'password'=>sha1($_POST['password1']),
		'email'=>$_POST['email'],
		'phone'=>$_POST['phone'],
		'gender'=>$_POST['gender'],
		'img'=>null,
		'access'=>0,
		'created_at'=>date('y-m-d h:i:s'),
		'created_by'=>0,
		'status'=>1,	
	);
	$user->user_insert($mydata);
	//redirect('login.php');
set_flash('thongbao',' Đăng Ký Thành Công');
redirect('index.php?option=user');
}

//slose isset :D
}


if(isset($_POST['CAPNHAT']))
{

	$id=$_POST['id'];
	$row=$user->user_rowid($id);
	$username=$_POST['username'];
	$data = array(
			'fullname'=>$_POST['userfullname'],
			'username'=>$_POST['username'],
			'email'=>$_POST['email'],
			'phone'=>$_POST['phone'],
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['id'],
			'status'=>1,
				);
	if($user->user_exits_slug($username,$id)==true)
			{		
				$user->user_update($data,$id);
				set_flash('thongbao',' Cập Nhật thành công');
			}
	else
		{
			set_flash('thongbao',' tên đã tồn tại');
		}
			redirect('index.php?option=user');	
			
//slose isset :D
}

if(isset($_POST['CAPNHAT_QUYEN']))
{

	$id=$_POST['id'];
	$row=$user->user_rowid($id);
	$username=$_POST['username'];
	$data = array(
			'fullname'=>$_POST['userfullname'],
			'username'=>$_POST['username'],
			'email'=>$_POST['email'],
			'phone'=>$_POST['phone'],
			'ad_access'=>$_POST['access_product'],
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['id'],
			'status'=>1,
				);
	if($user->user_exits_slug($username,$id)==true)
			{		
				$user->user_update($data,$id);
				set_flash('thongbao',' Cập Nhật thành công');
			}
	else
		{
			set_flash('thongbao',' tên đã tồn tại');
		}
			redirect('index.php?option=user&cat=account_admin');	
			
//slose isset :D
}


if(isset($_POST['THEMADMIN']))
{
	$error='';
	if($user->user_exits_username1($_POST['username'])==FALSE)
	{ 
		$error='<div class="alert alert-danger"> Username available </div>';
			set_flash('thongbao','Username available');
   		 	redirect('index.php?option=user&cat=insert');
	 }
	if($_POST['password1']!=$_POST['password2'])
	{ 
		$error='<div class="alert alert-danger"> Password incorrect </div>';
			set_flash('thongbao','Password incorrect');
     		redirect('index.php?option=user');
 }
if($error=='')
{
	$mydata=array(
		'username'=>$_POST['username'],
		'fullname'=>$_POST['userfullname'],
		'password'=>sha1($_POST['password1']),
		'email'=>$_POST['email'],
		'phone'=>$_POST['phone'],
		'gender'=>$_POST['gender'],
		'img'=>null,
		'access'=>1,
		'ad_access'=>$_POST['access_product'],
		'created_at'=>date('y-m-d h:i:s'),
		'created_by'=>0,
		'status'=>1,	
	);
	$user->user_insert($mydata);
	//redirect('login.php');
set_flash('thongbao',' Đăng Ký Thành Công');
redirect('index.php?option=user&cat=account_admin');
}

//slose isset :D
}

 ?>
