<?php

$feedback = loadModel('feedback');

$list=$feedback->list_feedback($page);

require_once 'views/header.php';
  ?>
<section class="clear
fix maincontent py-3">
	
		<div class="w-100 container " >
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6"><strong class="text-danger">Feedbacks</strong></div>
						<div class="col-md-6 text-right">
							<?php if ($_SESSION['Access']!=1) {
								echo "Bạn k có quyền sửa";
							}else{ ?>
							<a class="btb btn-danger btn-sm" href="index.php?option=feedback&cat=trash"><i class="fa fa-trash-o"></i> Trash</a>
						<?php } ?>
						</div> 
					</div>
				</div>
				<div  class="card-block p-3">
				<?php if(has_flash('thongbao')):  ?>
					<div class="alert alert-danger" > <?php echo get_flash('thongbao') ; ?> </div>
				<?php endif; ?>

					<table id="myTable" class="table table-inverse table-hover table-bfeedbacked">
						<thead>
							<tr>
								<th class="text-center" style="width:100px;">ID</th>
								<th class="text-center style="width:300px;height:10px;">Customer name</th>
						
								<th class="text-center">Phone</th>
								<th class="text-center">Detail</th>
								<th class="text-center" style="width:250px;">Title</th>
								<th class="text-center" style="width:250px;">Option</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($list as $row):?>
							<?php $id=$row['id']; 

							?>
							<tr>
									
									<td class="text-center text-danger">0<?php echo $row['id']  ?></td>
									<td class="text-center"><h6><?php echo $row['fullname']  ?></td>
									<td class="text-center"><?php echo $row['phone']  ?></td>
									<td class="text-center"><a href="index.php?option=feedback&cat=detail&id=<?php echo $row['id']  ?>">View Detail</a></td>
									<td class="text-center"><?php echo substr($row['title'],0,30); ?>...</td>
									<td class="text-center"><?php if ($_SESSION['Access']!=1) {
								echo "Bạn k có quyền sửa";
							}else{ ?><a class="btn btn-sm btn-warning" href="index.php?option=feedback&cat=rep&id=<?php echo $id; ?>" > <i class="fa fa-pencil-square-o"></i> </a>
									<a class="btn btn-sm btn-danger " href="index.php?option=feedback&cat=detrash&id=<?php echo $id; ?>" > <i class=" fa fa-trash"></i> </a></td><?php } ?>	
							</tr>
						<?php endforeach; ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<style type="text/css">
		
		a:hover{
    color: red;
    text-decoration: none;
}
	</style>