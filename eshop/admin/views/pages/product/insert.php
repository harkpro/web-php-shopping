<?php 
$category = loadModel('category');
$list_cat = $category->category_list('index');

$str_catid='';
foreach ($list_cat as $cat) {
	$str_catid.='<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
}

?>
<?php require_once 'views/header.php'; ?>
<section class=" clearfix maincontent py-2">
	<form name="form1" method="post" action="index.php?option=product&cat=process" enctype="multipart/form-data" >
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
						<a href="" title=""> Products</a>
					</li>	
					<li class="breadcrumb-item active" aria-current="page">
						<a href="" title=""> Add Product</a>
					</li>

				</ol>
			</nav>
		</div>

		<div class="col-md-6 text-right" >
		<button class="btn btn-sm btn-success" name="THEM"  type="submit">
		<i class="fas fa-save"></i> ADD [Insert]	</button> 
		<a class="btn btn-sm btn-danger" href="index.php" > Exit</a>
		</div>
		</div>
		</div>
		<div class="card-block p-3">
			<div class="row">
				<div class="col-md-9">
					<fieldset class="form-group" >
						<table>Product Name</table>
						<input type="text" name="name" class="form-control ckeditor" placeholder="Product Name" required>
					</fieldset>
					<fieldset class="form-group" >
						<table>Product Detail</table>
					<textarea name="detail" class="form-control ckeditor" rows="6" required></textarea>
					</fieldset>
					<fieldset class="form-group" >
						<table>SEO description</table>
						<textarea name="metadesc" class="form-control" rows="2" required></textarea>
					</fieldset>
					<fieldset class="form-group" >
						<table> Keyword SEO</table>
						<textarea name="metakey" class="form-control" rows="2" required></textarea>
					</fieldset>
			</div>
			<div class="col-md-3">
					<fieldset class="form-group" >
						<table>Product Type</table>
						<select name="catid"  class="form-control" required><option  value="">Choose Product Type</option>
						<?php 
							echo $str_catid;
						 ?>
						</select>
					</fieldset>
				<fieldset class="form-group" >
						<table>Product Price</table>
						<input type="number" name="price" value="1000" min="1000" step="1000" class="form-control" placeholder="Giá sản phẩm">	
					</fieldset>
					<fieldset class="form-group" >
						<table>Promotion price</table>
						<input type="number" name="pricesale" value="0" min="1000" step="1000" class="form-control" placeholder="Giá khuyến mãi">	
					</fieldset>
					<fieldset class="form-group" >
						<table>Amount</table>
						<input type="number" name="number" value="1" min="1" step="1" class="form-control" placeholder="số lượng">	
					</fieldset>
					<fieldset class="form-group" >
						<table>Status</table>
						<select name="status"  class="form-control"><option  value="1">Select status</option>
						<option value="1">Publish</option>
						<option value="2">Unpublished</option>
						</select>
					</fieldset>
						<fieldset class="form-group" >
						<table>Avatar</table>
						<input type="file" name="img" class="form-control" required>	
					</fieldset>
			</div>
			</div>			
		</div>	
		</div>
		</div>
	</form>
</section>
<?php require_once 'views/footer.php';  ?>