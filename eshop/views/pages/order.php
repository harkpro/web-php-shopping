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
		 <form name="forn1" action="index.php?option=success" method="post" enctype="multipart/form-data">
		<div class="container">
			<!-- row -->
			<div class="row">
					<div class="col-md-6">
						<div class="billing-details">
							

							<div class="section-title">
								<h3 class="title">Billing Details</h3>
							</div>
							<div class="form-group ">
								<input class="input" type="text" name="name" placeholder="Full Name"required>
							</div>
							<div class="form-group">
								<input class="input" type="number" name="phone" placeholder="Phone Number" required>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address" required>
							</div>
						</div>
					</div>
				
					

					<div class="col-md-7">
						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">Shipping Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" checked="checked" value="0" name="shipping" id="shipping-1" checked>
								<label for="shipping-1">Free Shipping -  $0.00</label>
								<div class="caption">
									<p>Giao hàng miễn phí từ" 4-6 ngày khu vực ngoại thành"
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" value="2" id="shipping-2">
								<label for="shipping-2">Standard - $2.00</label>
								<div class="caption">
									<p>giao hàng tiêu chuẩn từ 2-3 ngày khu vực ngoại thành
										<p>
								</div>
							</div>
						</div>

						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Payments Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" value="Ship_COD" name="payments" id="payments-1" checked>
								<label for="payments-1">Ship COD</label>
								<div class="caption">
									<p>Thanh toán khi nhận hàng
										<p>
								</div>
							</div>
						</div>
					</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Cart</h3>
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
										<td class="qty text-center"><p class="text-danger"><?php echo $item_cart['qty']?></p></td>
										<td class="total text-center"><strong class="primary-color">$<?php echo number_format($money_item); ?></strong></td>
									</tr>
										<?php endforeach; ?>
								</tbody>

								<tfoot>
									<tr>
										<a href="index.php?option=carts">Edit Shopping Cart</a>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">$<?php echo number_format($total_money); ?></th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPPING</th>
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
				   
							
						</div>

					</div>
				
			</div>
			<!-- /row -->
							
				</div>
							<div class="pull-right">
								<button name="aaa" type="submit" class="primary-btn">Place Order</button>
							</div>
		<!-- /container -->
	</form>
	</div>
	<!-- /section -->
	<?php require_once('views/footer.php');  ?>
