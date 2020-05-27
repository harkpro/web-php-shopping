<?php 
$category = loadModel('category');
$list_cat = $category->category_list('index');

$str_catid='';
foreach($list_cat as $cat) {
	$str_catid.='<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
}
$str_order='';
foreach($list_cat as $cat) {
	$str_order.='<option value="'.$cat['orders'].'">'.$cat['name'].'</option>';
}

?>
<?php require_once 'views/header.php'; ?>
<section class=" clearfix maincontent py-2">
	<form name="form1" method="post" action="index.php?option=category&cat=process" enctype="multipart/form-data" >
		<div class="container-fluid" >
			<div class="card" >
			<div class="card-header" >
			<div class="row" >
			<div class="col-md-6" >
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0 m-0 bg-none">
					<li class="breadcrumb-item">
						<a href="" title="">Dashboard</a>
					</li>
					<li class="breadcrumb-item">
						<a href="" title=""> Category</a>
					</li>	
					<li class="breadcrumb-item active" aria-current="page">
						<a href="" title=""> Add category</a>
					</li>

				</ol>
			</nav>
		</div>

		<div class="col-md-6 text-right" >
		<button class="btn btn-sm btn-success" name="THEM"  type="submit">
		 ADD [Insert]	</button> 
		<a class="btn btn-sm btn-danger" href="index.php" > Exit</a>
		</div>
		</div>
		</div>
		<div class="card-block p-3">
			<div class="row">
				<div class="col-md-9">
					<fieldset class="form-group" >
						<table>Category Name</table>
						<input type="text" name="name" class="form-control ckeditor" placeholder="Category Name" required>
					</fieldset>
					
			</div>
			<div class="col-md-3">
				<fieldset class="form-group" >
						<table>Category Type</table>
						<select name="catid"  class="form-control" required><option  value="0">--Phân Loại--</option>
						<?php echo $str_catid ?>
						</select>
					</fieldset>
					<fieldset class="form-group" >
						<table>Category Place Order</table>
						<select name="order"  class="form-control" required><option  value="">Choose category Type</option>
						<?php 
							echo $str_order;
						 ?>
						</select>
					</fieldset>
					<fieldset class="form-group" >
						<table>Status</table>
						<select name="status"  class="form-control"><option  value="1">Select status</option>
						<option value="1">Active</option>
						<option value="2">Inactive</option>
						</select>
					</fieldset>
			</div>
			</div>			
		</div>	
		</div>
		</div>
	</form>
</section>
<?php require_once 'views/footer.php';  ?>