<?php  
$menu = loadModel('menu');
$category = loadModel('category');
$list=$menu->menu_list();
$topic = loadModel('topic');
$topic_list=$topic->topic_list();
$list_category=$category->category_list_Order_PID(0);
?>
<?php 
require_once 'views/header.php';
  ?>
<section class=" maincontent clearfix py-5">
	<div class="container-fluid">
			<?php if(has_flash('thongbao')):  ?>
					<div class="alert alert-danger" > <?php echo get_flash('thongbao') ; ?> </div>
				<?php endif; ?>
		<div class="card">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h5 class="text-danger">List Of Menu</h5></div>
					<div class="col-md-6 text-right">
						<a href="index.php?option=menu&cat=trash">
							<button class="btn btn-sm btn-danger ">
							<i class="fa fa-trash-o"></i> trash
							</button>
						</a>
					</div>
				</div>
			</div>
		
		<div class="row">
			<div class="col-md-3  py-3">
				<div id="accordion">
   				 <div class="card">
					<div class="card-header" id="headingCategory">
					    <h5 class="mb-0">
					    <button class="btn btn-outline-success w-100" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
					    Loại sản phẩm
					    </button>
					    </h5>
					</div>
					<div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordion">
					    <div class="card-body">
					    <form action="insert.php" method="post">
					        <fieldset class="form-group">
					            <?php foreach ($list_category as $row) : ?>
					            <div class="form-check">
					                <input class="form-check-input" name="itemcat" type="radio" value="<?=$row['id']?>" id="itemcategory<?=$row['slug']?>">
					                <label class="form-check-label" for="itemcategory<?=$row['slug']?>">
					                    <?=$row['name']?>
					                </label>
					            </div>
					            <?php endforeach; ?>
					        </fieldset>
					        <fieldset class="form-group">
					            <input type="hidden" name="type" value="category">
					            <button class="btn btn-outline-dark form-control" type="submit" name="THEM">Thêm</button>
					        </fieldset>
					    </form>
					    </div>
					</div>						
				 </div>
						
				 </div>
 						<?php require_once 'views/pages/menu/menu_custom.php'; ?>

				</div>
			<div class="col-md-8 py-3">
<table class="table table-bordered table-inverse table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Menu Link</th>
			<th>Create Date</th>
			<th>option</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($list as $li): ?>
			<?php $id=$li['id']; ?>
		<tr>
			<td><?php echo $li['id']; ?></td>
			<td><?php echo $li['name']; ?></td>
			<td><?php echo $li['link']; ?></td>
			<td><?php echo $li['created_at']; ?></td>
			<td><?php if($li['status']==1):  ?>
									<a class="btn btn-sm btn-success" href="index.php?option=menu&cat=status&id=<?php echo $id; ?>" > <i class="fa fa-toggle-on"></i> </a>
									<?php else: ?>
										
										<a class="btn btn-sm btn-danger" href="index.php?option=menu&cat=status&id=<?php echo $id; ?>" > <i class="fa fa-toggle-off"></i> </a>	
								<?php endif;  ?>
									<a class="btn btn-sm btn-warning" href="index.php?option=menu&cat=update&id=<?php echo $id; ?>" > <i class="fa fa-pencil-square-o"></i> </a>
									<a class="btn btn-sm btn-danger " href="index.php?option=menu&cat=detrash&id=<?php echo $id; ?>" > <i class=" fa fa-trash"></i> </a>
								</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
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