<?php  
$category = loadModel('category');
$list=$category->category_list();

?>

<?php 
require_once 'views/header.php';
  ?>

<section class="clear
fix maincontent py-3">
		<div class="w-100 container-fluid " >
			<div class="row">
				<div class="col col-md-4">
					<div class="card">
						<div class="card-header">
							<div class="col-md-12"> <strong class="text-danger"> CATEGORY PREVIEWS</strong></div>
						</div>
					<?php require_once 'views/pages/category/list_category.php'; ?>
					
				</div>
				</div>
				<div class="col col-md-8">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6"><strong class="text-danger">LIST OF CATEGORY</strong></div>
						<div class="col-md-6 text-right">
							<?php if ($_SESSION['Access']!=1) {
								echo "Bạn k có quyền sửa";
							}else{ ?>
							<a class="btb btn-success btn-sm" href="index.php?option=category&cat=insert"> <i class="fa fa-plus-square-o"></i> Add Category</a>
							<a class="btb btn-danger btn-sm" href="index.php?option=category&cat=trash"><i class="fa fa-trash-o"></i> Trash</a>

						<?php } ?>
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
								<th style="width:20px;" class="text-center">ID</th>
								<th class="text-center">Name category</th>
								<th style="width:20px;" class="text-center">Parentid</th>
								<th class="text-center" style="width:160px;"> Date Submitted</th>
								<th class="text-center" style="width:160px;">Option</th>
								
							</tr>
						</thead>
						<tbody>
							<?php foreach($list as $row):?>
								<?php
								 $id=$row['id']; 
								?>
							<tr>
								<td class="text-danger"><?php echo $id; ?></td>
								<td class="text-center"><?php echo $row['name']  ?></td>
								<td><?php echo $row['parentid']  ?></td>
								<td> <?php echo $row['created_at']  ?></td>
								<td class="text-center">
									<?php if ($_SESSION['Access']!=1) {
								echo "Bạn k có quyền sửa";
							}else{ ?>
									<?php if($row['status']==1):  ?>
									<a class="btn btn-sm btn-success" href="index.php?option=category&cat=status&id=<?php echo $id; ?>" > <i class="fa fa-toggle-on"></i> </a>
									<?php else: ?>
										
										<a class="btn btn-sm btn-danger" href="index.php?option=category&cat=status&id=<?php echo $id; ?>" > <i class="fa fa-toggle-off"></i> </a>	
								<?php endif;  ?>
									<a class="btn btn-sm btn-warning" href="index.php?option=category&cat=update&id=<?php echo $id; ?>" > <i class="fa fa-pencil-square-o"></i> </a>
									<a class="btn btn-sm btn-danger " href="index.php?option=category&cat=detrash&id=<?php echo $id; ?>" > <i class=" fa fa-trash"></i> </a>
								<?php } ?>
								</td>
								
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col col-md-4 ">
			<div class="card-header border border-bottom-0">
					<div class="row">
						<div class="col-md-6"><strong class="text-danger">CATEGORY PREVIEWS</strong></div>
					</div>
				</div>
				<div class="border">
				<?php require_once 'views/pages/category/list_category.php'; ?>
			</div>
		</div>
		</div>
		</div>
	</section>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<?php require_once 'views/footer.php';  ?>