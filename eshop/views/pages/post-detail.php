<?php
$post=loadModel('post');
$topic=loadModel('topic');
$slug=$_REQUEST['id'];
$row=$post->post_rowslug($slug);
 require_once('views/header.php');  ?>

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
				<li><a href="index.php?option=post">Post</a></li>
				<li class="active">Detail Post</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Detail Post</h3>
								<h2 class="text-center py-5 text-info"><?php echo $row['title'];?></h5>
							</div>
							
							<?php echo $row['detail'];?>
							
						</div>

					</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->


<?php require_once('views/footer.php');  ?>