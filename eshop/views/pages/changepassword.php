<?php

 require_once('views/header.php'); 
 require_once ('config.php');
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
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?option=myaccount">My account</a></li>
				<li class="active">Change Profile</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

<?php if (!isset($_SESSION['customer_id'])) {  ?>

	
	<p class="alert-danger alert"> Bạn chưa đăng nhập</p>

<?php
 } else{

$user = loadModel('user');
$id = $_SESSION['customer_id'];
$row= $user->list_user_cuss($id);


}

?>

<?php 
$servername  = "localhost";
$username = "root";
$password = "140499";
$dbname = "eshop";


if (isset($_POST['changepw'])) {
	$conn = new mysqli($servername, $username, $password,$dbname);
	if ($conn->connect_error) {
		die("Connection Failed: ".$conn->connect_error);
	}

	$cid = $_SESSION['customer_id'];
	$oldpassword = sha1($_POST['oldpassword']);
	$newpassword = sha1($_POST['newpassword']);
	$newpassword1 = sha1($_POST['newpassword1']);
	$get = mysqli_query($conn, "SELECT password FROM `eshop`.`latnt_user` WHERE user_id = '$cid'");
	$row = mysqli_fetch_assoc($get);
	$oldpassworddb = $row['password'];
	if ($oldpassword == $oldpassworddb) {
		if ($newpassword == $newpassword1) 
		{
			$sql = mysqli_query($conn, "UPDATE `eshop`.`latnt_user` SET password = '$newpassword' 
				WHERE user_id = '$cid' ");
				?>
			<script>alert("Cập nhật mật khẩu thành công")</script>
		<?php	
		}
		else{?>
			<script>alert("Mật khẩu mới không trùng nhau")</script>
			<?php
		}
	}
	else
	{?>

		<script>alert("Mật khẩu không đúng hoặc bạn chưa nhập gì cả")</script>
		<?php 
	}
	
	}

	?>
	
	
	
	
	

<section class="container">
	<form name="from1" action="index.php?option=changepassword" method="post" class="clearfix">
          <div class="col-md-6">
            <div class="billing-details ">
              <div class="section-title">
                <h3 class="title">Change password</h3>
              </div>
			             
              <div class="form-group">
                <input class="input" type="password" name="oldpassword" placeholder="Old Password">
              </div>
              <div class="form-group">
                <input class="input" type="password" name="newpassword" placeholder=" New Password">             
              </div>
              <div class="form-group">
              	<input class="input" type="password" name="newpassword1" placeholder=" Repeat Password">
              </div>
                <button type="submit" method="POST"  name="changepw"  class="primary-btn">&nbsp;&nbsp;Confirm&nbsp;&nbsp;</button>

            </div>
          </div>
        </form>
</section>	


<?php require_once ('views/footer.php'); ?>