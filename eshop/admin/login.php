<?php
//session_start();
require_once ('../Config.php');
require_once ('../system/load.php');
require_once ('../system/core.php');
require_once ('../system/Database.php');
if(isset($_SESSION['user_id'])){redirect('index.php');}		
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Đăng Nhập Hệ Thống</title>
		<link rel="stylesheet" href="../public/cssAdmin/bootstrap.min.css">
	</head>
	<body>
		<style type="text/css">
			.login-form{
				max-width:500px;
				min-height: 200px;
				border:1px solid #ccc;
				border-radius: 5px;
				margin:auto;}	
		</style>
		<?php
		if(isset($_POST['LOGINSS']))
		{	
			$auth=loadModel('Auth');
			$username =$_POST['username'];
			$password =sha1($_POST['password']);
			if($auth->auth_check($username)==true)
				{
					$user = $auth->auth_guard($username,$password);
					if($user!=false)
					{
						$_SESSION['user_admin']=$username;
						$_SESSION['user_id']=$user['user_id'];
						$_SESSION['Access']=$user['ad_access'];
						$_SESSION['user_fullname']=$user['fullname'];
						$_SESSION['user_img']=$user['img'];
						redirect('index.php');

					}
					else
					{
						$error_password='Mật Khẩu Không Đúng';
					}
				}
				else
				{
					$error_username='Tên Đăng Nhập Không Đúng';
				}
		}
		?>
		<div class="login-form p-4 mt-1 mt-md-5 "> <h3 class=" text-dark text-center"> LOGIN</h3>
			<form name="from1" action="" method="post">
				<fieldset class="form-group">
					<label >User Name</label>
					<input type="text" class="form-control" name="username" placeholder="Enter Username Or Email">
					<?php if(isset($error_username)){	echo "<span class='text-danger'>".$error_username."</span>";} ?>
				</fieldset>
				<fieldset class="form-group">
					<label>Password</label>
					<input type="Password" class="form-control" name="password" placeholder="Password">
					<?php if(isset($error_password)){	echo "<span class='text-danger'>".$error_password."</span>";} ?>
				</fieldset>
				<fieldset class="form-group">
					<button name="LOGINSS" type="submit" class="btn btn-primary form-control"> LOGIN</button>
				</fieldset>
				<fieldset class="form-group">
	

			</form>
		</div>

	</body>
</html>