<?php
$cart = loadClass('cart');
$list_cart = $cart->cart_content();
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
				<li class="active">View Cart</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<form action="index.php?option=cart&cat=update" method="post" enctype="multipart/form-data">
		<div class="container">
			<!-- row -->
			<div class="row">
					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Giỏ đồ</h3>
							</div>
							<?php if($list_cart!=null): ?>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th> Name Product</th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th style="width:15%;" class="text-right"><button type="submit" class="main-btn icon-btn"><i class="fa fa-undo"></i></button>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php $total_money=0; ?>
							<?php foreach($list_cart as $item_cart): ?>
								<?php $money_item = $item_cart['qty']*$item_cart['price'];
								$total_money+=$money_item;

								?>
										<td class="thumb"><img src="public/img/<?php echo $item_cart['img']?>" alt=""></td>
										<td class="details">
											<a href="#"><?php echo $item_cart['name']?></a>
											<input name="pid[]" type="hidden" value="<?php echo $item_cart['id']?>">
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong><?php echo $item_cart['price']?></strong><br><del class="font-weak"><small>$<?php echo $item_cart['price']?>.00</small></del></td>
										<td class="qty text-center"><input class="input" name="qty[]" type="number" value="<?php echo $item_cart['qty']?>"></td>
										<td class="total text-center"><strong class="primary-color">$<?php echo number_format($money_item); ?></strong></td>
										<td class="text-right"><a class="main-btn icon-btn" href="index.php?option=cart&cat=delete&pid=<?php echo $item_cart['id']?>"><i class="fa fa-close"></i></a></td>
									</tr>
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
										<th colspan="2" class="total">$<?php echo number_format($total_money); ?></th>
									</tr>
								</tfoot>
							</table>
								<?php else: ?>
						<h4> Chưa Có Sản Phẩm nào</h4>
				<?php endif; ?>
							<div class="pull-right">
								<a href="index.php?option=order"class="primary-btn"> Place Order</a>
							</div>
						</div>

					</div>
				
			</div>
			<!-- /row -->
		</div>
		</form>
		<!-- /container -->
	</div>
	<!-- /section -->
	

	<?php require_once('views/footer.php');  ?>