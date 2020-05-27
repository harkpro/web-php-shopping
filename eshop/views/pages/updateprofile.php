<?php require_once('views/header.php'); ?>

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
$servername = "localhost";
$username = "root";
$password = "140499";
$dbname = "eshop";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['confirm'])) 
{	
	
	$cid = $_SESSION['customer_id'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$pnumber = $_POST['phonenumber'];
	$gender = $_POST['gender'];
	echo $cid;
	echo $un;
	if (empty($fullname) or empty($email) or empty($pnumber)) {?>
	<script>alert('Bạn chưa nhập đủ thông tin cần sửa')</script>
	<?php 
	}
	else
	{
		$sql = mysqli_query($conn, "UPDATE `eshop`.`latnt_user` 
									set `fullname` = '$fullname', `email` = '$email', `gender` = $gender, `phone` = '$pnumber'
									WHERE user_id = '$cid'");
		?>
		<script>alert('Cập nhật thông tin thành công')</script>
	<?php  
	}

}
 ?>

<section class="container">
	<form name="form1" action="index.php?option=updateprofile" method="post" class="clearfix">
          <div class="col-md-6">
            <div class="billing-details ">
              <div class="section-title">
                <h3 class="title">Change profile setting</h3>
              </div>
              <div class="form-group">
                <input class="input" type="text" name="fullname" placeholder="Full Name">
                 <?php
              if(isset($error_username)) {  echo "<span class='text-danger'>".$error_username."</span>";}?>
              </div>
              <div class="form-group">
                <input class="input" type="email" name="email" placeholder="Email">
                
              </div>
              <div class="form-group">
                <input class="input" type="text" name="phonenumber" placeholder="Phone Number">     
              </div>
              <div class="form-group" >
					
					<select name="gender"  class="form-control" required>
					<option  value="0">Man</option>
					<option  value="1">Woman</option>
					</select>
						
			  </div>
                <button type="submit"   name="confirm"  class="primary-btn">&nbsp;&nbsp;Confirm Change&nbsp;&nbsp;</button>
            </div>
          </div>
        </form>
</section>	


<?php require_once ('views/footer.php'); ?>