<?php $cart = loadClass('cart');
$list_cart = $cart->cart_content();
$category = loadModel('Category');
$listcat1 = $category->category_parentid(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Boutique Shop Management</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css" />
	
	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="public/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="public/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="public/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="public/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="public/css/style.css" />

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>Welcome to our Boutique Shop!</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="#">Store</a></li>
						<li><a href="#">Newsletter</a></li>
						<li><a href="#">FAQ</a></li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">English (ENG)</a></li>
								<li><a href="#">Russian (Ru)</a></li>
								<li><a href="#">French (FR)</a></li>
								<li><a href="#">Spanish (Es)</a></li>
							</ul>
						</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">USD ($)</a></li>
								<li><a href="#">EUR (€)</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="index.php">
							<img src="public/img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						 <form action="index.php?option=Search" method="get">
      						<input name="option" value="search" type="hidden">
      						 <input class="input search-input" value="<?php  if(isset($_REQUEST['keyword'])){echo $_REQUEST['keyword'];} ?>" name="keyword"  type="search" placeholder="Search" aria-label="Search">
							<select class="input search-categories">
								<option   value="0">All Category</option>
								<?php foreach ($listcat1 as $list): ?>
								<option value="0"><?php echo $list['name']; ?></option>	
								<?php endforeach ?>
								
							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<?php if(isset($_SESSION['customer_id'])) { ?>
							<a href="index.php?option=logout" class="text-uppercase">LOGOUT</a> 
							<?php } else { ?>
							<a href="index.php?option=login" class="text-uppercase">Login</a>
							<?php } ?>/ <a href="#" class="text-uppercase">Join</a>
							<ul class="custom-menu">
								<li><a href="index.php?option=myaccount"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="index.php?option=login"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="index.php?option=register"><i class="fa fa-user-plus"></i> Create An Account</a></li>
							</ul>
						</li>
						<!-- /Account -->
						<!-- Cart -->
						<li id="ajax_11" class="header-cart dropdown default-dropdown">
							
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<?php if($list_cart!=null): ?>
											<?php $total_money=0; ?>	
										<?php foreach($list_cart as $item_cart): ?>
												<?php $money_item = $item_cart['qty']*$item_cart['price'];
												$total_money+=$money_item; ?>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="public/img/<?php echo $item_cart['img']?>" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$<?php echo $item_cart['price']?>.00 <span class="qty">x<?php echo $item_cart['qty']?></span></h3>
												<h2 class="product-name"><a href="#"><?php echo $item_cart['name']?></a></h2>
											</div>
											<button name="delete_Cart" id="<?php echo $item_cart['id']?>" class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									<?php endforeach; ?>
								<?php else: ?>
						<span> Chưa Có Sản Phẩm nào</span>
				<?php endif; ?>
									</div>
									<div class="shopping-cart-btns">
										<a href="index.php?option=cart"><button class="main-btn">View Cart</button></a>
										<a href="index.php?option=order"><button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button></a>
									</div>
								</div>
							</div>
								
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty"> <?php echo $cart->cart_total_all_product(); ?></span>
								</div>
								<strong class="text-uppercase">My Cart:</strong>
								<br>
								<span class="total" ><?php if($list_cart!=null): ?>$<?php echo number_format($total_money); ?><?php else: ?> $<?php echo '0';?><?php endif; ?></span>
							</a>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->