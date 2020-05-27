<?php
ob_start();
require_once('views/header.php');  
require_once ('Config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');
?>
	<div id="navigation">
		<div class="container">
			<div id="responsive-nav">	
					<div class="category-nav show-on-click">
				<?php require_once('views/modules/category.php');  ?>
			</div>
<?php require_once('views/modules/mainmenu.php');  ?>
			</div>
		</div>
	</div>


  <?php if(has_flash('thongbao')):  ?>
          <div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
        <?php endif; ?>
<?php if(isset($_SESSION['customer_id'])){redirect('index.php'); } ?>


		<?php
		if(isset($_POST['LOGINSS']))
		{	
			$auth=loadModel('Auth');
			$username =$_POST['username'];
			$password =sha1($_POST['password']);
			if($auth->user_auth_check($username)==true)
				{
          
					$user = $auth->user_auth_guard($username,$password);
					if($user!=false)
					{
						$_SESSION['customer_username']=$username;
						$_SESSION['customer_id']=$user['user_id'];
						$_SESSION['customer_fullname']=$user['fullname'];
						$_SESSION['customer_img']=$user['img'];
						   redirect('index.php');
					}
					else
					{
						$error_password='*Mật Khẩu Không Đúng';
					}
				}	
				else
				{
					$error_username='*Tên Đăng Nhập Không Đúng';
				}
		}
		?>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <div class="billing-details">
              <div class="section-title">
                <h3 class="title">LOGIN WITH SOCAL MEDIA</h3>
              </div>
                  <button class="loginBtn loginBtn--facebook">
          Login with Facebook
        </button>
        </br>
        <button class="loginBtn loginBtn--google">
         Login with Google
        </button><br>
        <button class="loginBtn loginBtn--zalo">
          Login with Zalo
        </button>
            </div>
          </div>
			<form name="from1" action="" method="post" class="clearfix">
          <div class="col-md-6">
            <div class="billing-details ">
              <div class="section-title">
                <h3 class="title">LOGIN</h3>
              </div>
              <div class="form-group">
                <input class="input" type="text" name="username" placeholder="Username">
                 <?php
              if(isset($error_username)) {  echo "<span class='text-danger'>".$error_username."</span>";}?>
              </div>
              <div class="form-group">  
                <input class="input" type="password" name="password" placeholder="Password">
                <?php if(isset($error_password)) {  echo "<span class='text-danger'>".$error_password."</span>";}?> 
              </div>
                <button type="submit"   name="LOGINSS"  class="primary-btn">&nbsp;&nbsp;LOGIN&nbsp;&nbsp;</button>
            </div>
          </div>
        </form>
</div>
</div>
<?php
require_once('views/footer.php');
 ob_end_flush(); ?>
?>

<style type="text/css">
/* Shared */
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 15px 0 46px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}


/* Google */
.loginBtn--google {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #DD4B39;
  width: 204px;
}
.loginBtn--google:before {
  border-right: #BB3F30 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
  background: #E74B37;
}

/* zalo */
.loginBtn--zalo {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #6666FF;
  width: 204px;
}
.loginBtn--zalo:before {
  border-right: #6666FF 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--zalo:hover,
.loginBtn--zalo:focus {
  background: #6666FF;
}
</style>
