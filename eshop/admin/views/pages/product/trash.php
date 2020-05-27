<?php  
$product = loadModel('product');
$category= loadModel('category');
$list=$product->product_list(false);
?>
<?php 
require_once 'views/header.php';
  ?>

<section class="clear
fix maincontent py-3">
		<div class="w-100 container-fluid " >
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6"><strong class="text-danger">Product Trash</strong></div>
						<div class="col-md-6 text-right">
							<a class="btb btn-danger btn-sm" href="index.php?option=product">Exit</a>
						</div>
					</div>
				</div>
				<div  class="card-block p-3">
					<?php if(has_flash('thongbao')):  ?>
					<div class="alert alert-danger" > <?php echo get_flash('thongbao') ; ?> </div>
				<?php endif; ?>
					<table id="myTable" class="table table-inverse table-hover table-bordered">
						<thead>
							<tr>
								<th style="width:90px;">Image</th>
						
								<th class="text-center">Name Product</th>
								<th class="text-center">Type Product</th>
								<th class="text-center" style="width:160px;">Date Submitted</th>
								<th class="text-center" style="width:160px;">Option</th>
								<th style="width:20px;" class="text-center">ID</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($list as $row):?>
								<?php
								 $id=$row['id']; 
								 $category_name=$category->category_name($row['catid']);
								?>
							<tr>
								<td><img class="img-fluid" src="../public/img/<?php echo $row['img'] ?>" alt=""></td>
								<td class="text-center"><?php echo $row['name']  ?></td>
								<td><?php echo $category_name;  ?></td>
								<td> <?php echo $row['created_at']  ?></td>
								<td>
									<a class="btn btn-sm btn-warning" href="index.php?option=product&cat=retrash&id=<?php echo $id; ?>=<?php echo $id; ?>" > Khôi Phục </a>
									<a class="btn btn-sm btn-danger" href="index.php?option=product&cat=delete&id=<?php echo $id; ?>" > Xóa vv </a>
								</td>
								<td class="text-danger"><?php echo $id; ?></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<?php require_once 'views/footer.php';  ?>