<?php require_once('views/header.php');  ?>
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
<?php
$id=$_REQUEST['id'];
$order= loadModel('order');
$product= loadModel('product');
$orderdetail = loadModel('orderdetail');
$row=$order->order_rowid($id);
$oorder_product=$orderdetail->orderdetail($id);

 ?>

 <!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?option=cart">Cart</a></li>
				<li><a href="index.php?option=Order">Checkout</a></li>
				<li class="active">Order-detail</li>
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
								<p class="text-danger alert alert-danger">Order success! Thank you for Order </p>
								<h3 class="title">Order Detail</h3>
						
							</div>
							
					<table class="shopping-cart-table table">
						
						<tbody>
							<tr>
								<td class=""><h5>Customer Name</h5></td>
								<td><?php echo $row['deliveryname']?></td>
							</tr>
							<tr>
								<td class=""><h5>Code</h5></td>
								<td><?php echo $row['code']?></td>
							</tr>
							<tr>
								<td class=""><h5>Address</h5></td>
								<td><?php echo $row['deliveryaddress']?></td>
							</tr>
							<tr>
								<td class=""><h5>Email</h5></td>
								<td><?php echo $row['deliveryemail']?></td>
							</tr>	
							<tr>
								<td class=""><h5>Phone Number</h5></td>
								<td><?php echo $row['deliveryphone']?></td>
							</tr>	
							<tr>
								<td class=""><h5>ShippingMethods</h5></td>
								<td><?php if($row['ShipingMethods']>0){echo "Standard - $2.00";}else{echo "Free Ship";}  ?></td>
							</tr>	
							<tr>
								<td class=""><h5>Payments</h5></td>
								<td><?php echo $row['Payments']?></td>
							</tr>	
						</tbody>
					</table>
							
						</div>

					</div>
			</div>
			<!-- /row -->
		
		<!-- /container -->
	
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product ID</th>
										<th>Name </th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-center">Image</th>
										
									</tr>
								</thead>
								<tbody>

									<tr>
				<?php $total_money=0; ?>
				<?php foreach($oorder_product as $pr):?>
					<?php
					$idd=$pr['productid'];
					$list_product=$product->list_product11($idd);
					?>
					<?php foreach($list_product as $pp):?>
						<?php $money_item = $pr['quantity']*$pr['price'];
								$total_money+=$money_item; 

								?>
								
										<td><?php echo $pr['productid'];  ?></td>
					<td class="details"><?php echo $pp['name'];  ?></td>
					<td class="price text-center"><?php echo $pp['price'];  ?></td>
					<td class="price text-center"><?php echo $pr['quantity'];  ?></td>
					<td class="price text-center"><?php echo $money_item  ?></td>
					<td  class="thumb"><img  src="public/img/<?php echo $pp['img']?>" alt=""></td>
									</tr>
										<?php endforeach; ?>
										<?php endforeach; ?>
								</tbody>

								<tfoot>
									<tr>
										
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">$<?php echo number_format($total_money); ?></th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">$<?php echo number_format($total_money+$row['ShipingMethods']); ?></th>
									</tr>
								</tfoot>
							</table>
				   
							<div class="pull-right">
								<button name="aaa" type="submit" class="primary-btn">Place Order</button>
							</div>
						</div>
						</div>
						</div>
<?php require_once('views/footer.php');  ?>