<?php

$user = loadModel('user');

$list=$user->list_user();

require_once 'views/header.php';

  ?>
<section class="clearfix maincontent py-3">
		<div class="w-100 container " >
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6"><strong class="text-danger"> LIST OF USER CUSTOMER</strong></div>
						<div class="col-md-6 text-right">
							<?php if ($_SESSION['user_id']!=28) {
								
							}else{ ?>
							<a href="index.php?option=user&cat=account_admin" class="text-danger"> Quản Lý Tài Khoản</a>
						<?php } ?>
							<a class="btb btn-danger btn-sm" href="index.php?option=user&cat=trash"><i class="fa fa-trash-o"></i> Trash</a>
						</div> 
					</div>
				</div>
				<div  class="card-block p-3">
				<?php if(has_flash('thongbao')):  ?>
					<div class="alert alert-danger" > <?php echo get_flash('thongbao') ; ?> </div>
				<?php endif; ?>

					<table id="myTable" class="table table-inverse table-hover table-busered">
						<thead>
							<tr>
								<th class="text-center" style="width:10%;">ID</th>
								<th class="text-center" style="width:20%">Full-Name</th>
								<th class="text-center">User-Name</th>
								<th class="text-center">Phone</th>
								<th class="text-center" style="width:250px;">Email</th>
								<th class="text-center" style="width:250px;">Option</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($list as $row):?>
							<?php $id=$row['user_id']; ?>
							<tr>
									<td class="text-center text-danger">0<?php echo $row['user_id']  ?></td>
									<td class="text-center"><h6><?php echo $row['fullname']  ?></td>
									<td class="text-center"><?php echo $row['username']  ?></td>
									<td class="text-center"><?php echo $row['phone']  ?></td>
									<td class="text-center"><?php echo substr($row['email'],0,30); ?></td>
									<td class="text-center"><?php if($row['status']==1):  ?>
									<a class="btn btn-sm btn-success" href="index.php?option=user&cat=status&id=<?php echo $id; ?>" > <i class="fa fa-toggle-on"></i> </a>
									<?php else: ?>
										<a class="btn btn-sm btn-danger" href="index.php?option=user&cat=status&id=<?php echo $id; ?>" > <i class="fa fa-toggle-off"></i> </a>	
								<?php endif;  ?>
									<a class="btn btn-sm btn-warning" href="index.php?option=user&cat=update&id=<?php echo $id; ?>" > <i class="fa fa-pencil-square-o"></i> </a>
									<a class="btn btn-sm btn-danger " href="index.php?option=user&cat=detrash&id=<?php echo $id; ?>" > <i class=" fa fa-trash"></i> </a></td>	
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
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