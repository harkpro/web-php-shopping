<?php 
require_once 'views/header.php';
$id=$_SESSION['user_id'];
$feedback=loadModel('feedback');
$c_feedback =$feedback->all();
$category=loadModel('category');
$c_category =$category->all();
$order = loadModel('order');
$c_order = $order->all();

$Product=loadModel('Product');
$c_Product =$Product->all();

$Topic=loadModel('Topic');
$c_Topic =$Topic->all();
$Post=loadModel('Post');
$c_Post =$Post->all();
$Slider=loadModel('Slider');
$c_Slider =$Slider->all();
$user=loadModel('user');
$c_user =$user->all();
$row=$user->user_rowid($id);
$s=count($row);
  ?>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<div class="container-fluid">
	<div class="row ">
		<div class="col-md-3 ">
		<section> 
			 <div class="card">
        <div class="card-header">
            <img src="../public/img/user/<?php echo $row['img']; ?>" alt="Profile Image" class="profile-img">
        </div>
        <div class="card-body">
            <p class="full-name"><?php echo $row['fullname']; ?></p>
            <p class="username"><?php echo $row['email']; ?></p>
            <p>
                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon tumblr"><i class="fab fa-tumblr"></i></a>
                <a href="#" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-icon google-plus"><i class="fab fa-google-plus"></i></a>
            </p>
        </div>
    <div class="gw-sidebar">
  <div id="gw-sidebar" class="gw-sidebar">
    <div class="nano-content">
      <ul class="gw-nav gw-nav-list">
        <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">Feedback Manager</span> <b class="gw-arrow"></b> </a>
          <ul class="gw-submenu">
            <li>  <a  href="index.php?option=feedback">All Feedback<span class="sr-only">(current)</span></a> </li>
          </ul>
        </li>
        <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">Category Manager</span> <b class="gw-arrow icon-arrow-up8"></b> </a>
          <ul class="gw-submenu">
            <li> <a class="dropdown-item" href="index.php?option=category">All Category</a> 
             </li>
            <li>  
          <a class="dropdown-item" href="index.php?option=category&cat=insert">Insert Category</a>  </li>
          </ul>
        </li>
        <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">Product Manager</span> <b></b> </a>
          <ul class="gw-submenu">
            <li> </li>
            <li>  </li>
          </ul>
        </li>
         <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">Topic Manager</span> <b></b> </a>
          <ul class="gw-submenu">
            <li> </li>
            <li>  </li>
          </ul>
        </li>
         <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">Slider Manager</span> <b></b> </a>
          <ul class="gw-submenu">
            <li> </li>
            <li>  </li>
          </ul>
        </li>
         <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">Order Manager</span> <b></b> </a>
          <ul class="gw-submenu">
            <li> </li>
            <li>  </li>
          </ul>
        </li>
         <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">User Manager</span> <b></b> </a>
          <ul class="gw-submenu">
            <li> </li>
            <li>  </li>
          </ul>
        </li>
         <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">Menu Manager</span> <b></b> </a>
          <ul class="gw-submenu">
            <li> </li>
            <li>  </li>
          </ul>
        </li>
         <li class="init-arrow-down"> <a href="javascript:void(0)"> <span class="gw-menu-text">Menu Manager</span> <b></b> </a>
          <ul class="gw-submenu">
            <li> </li>
            <li>  </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
    </div>	
		</section>
		</div>
<div class="col col-md-8 pt-5 ">
  <section class="clearfix maincontent py-3">
  <div class="container-fluid"> 
  <div class="border">
    <div class="card-header">
      <div class="row">
      <div class="col-md-12"><h3 class="text-danger text-right"> Thống Kê</h3>  </div>
            </div>
            </div>
    <div class="card-block p-2">
        <div class="col-md-12">
          <ul class="list-group">
            <li class="list-group-item">Feedback: <span class="badge badge-danger"><?php echo $c_feedback ?></span></li>
            <li class="list-group-item">Category: <span class="badge badge-danger"><?php echo $c_category ?></span></li>
            <li class="list-group-item">Product: <span class="badge badge-danger"><?php echo $c_Product ?> </span> <a href="index.php?option=dashboard&cat=product_statistical"> Xem thống kê</a></li>
            <li class="list-group-item">Topic: <span class="badge badge-danger"><?php echo $c_Topic ?></span></li>
            <li class="list-group-item">Order: <span class="badge badge-danger"><?php echo $c_order ?></span></li>
            <li class="list-group-item">Post: <span class="badge badge-danger"><?php echo $c_Post ?></span></li>
             <li class="list-group-item">Slider: <span class="badge badge-danger"><?php echo $c_Slider ?></span></li>
              <li class="list-group-item">User: <span class="badge badge-danger"><?php echo $c_user ?> </span></li>
              
          </ul>
        </div>
      </div>
  </div>
	
</div>
</div>
</section>

	</div>
</div>
	<style type="text/css">
* {
    box-sizing: border-box;
}
/*=================left navibar begin=========================================*/


.gw-sidebar .nano-pane {
  background: rgba(255, 255, 255, 0);
  font-size: 15px;
}

.gw-sidebar .gw-nav-list { border-right: 1px solid #CCC; }

.gw-sidebar .gw-nav-list li a { padding-left: 20px; }

.gw-nav-list {
  margin: 0;
  padding: 0;
  list-style: none
}

.gw-nav-list>li:first-child { border-top: 0; }

.gw-nav-list>li {
  display: block;
  padding: 0;
  margin: 0;
  border: 0;
  border-top: 1px solid #fcfcfc;
  border-bottom: 1px solid #e5e5e5;
  position: relative;
  text-decoration: none;
}
 @-webkit-keyframes 
arrow-slide {  0% {
}
 100% {
-webkit-transform:rotate(225deg);
z-index:3
}
}
 @-webkit-keyframes 
arrow-slide1 {  0% {
}
 100% {
-webkit-transform:rotate(225deg);
z-index:3
}
}

.gw-nav-list>li.arrow-down:after {
  content: '';
  width: 7px;
  height: 7px;
  position: absolute;
  right: 10px;
  top: 15px;
  border-top: 1px solid #bababa;
  border-left: 1px solid #bababa;
  -webkit-transform: rotate(45deg);
  -webkit-animation: arrow-slide .5s 0s ease both;
}

.gw-nav-list>li.init-arrow-down:after {
  content: '';
  width: 7px;
  height: 7px;
  position: absolute;
  right: 10px;
  top: 15px;
  border-right: 1px solid #bababa;
  border-bottom: 1px solid #bababa;
  -webkit-transform: rotate(45deg);
}

.gw-nav-list>li.arrow-up:after {
  content: '';
  width: 7px;
  height: 7px;
  position: absolute;
  right: 10px;
  top: 15px;
  border-right: 1px solid #bababa;
  border-bottom: 1px solid #bababa;
  -webkit-transform: rotate(45deg);
  -webkit-animation: arrow-slide1 .5s 0s ease both;
}

.gw-nav-list>li.init-arrow-up:after {
  content: '';
  width: 7px;
  height: 7px;
  position: absolute;
  right: 10px;
  top: 15px;
  border-top: 1px solid #bababa;
  border-left: 1px solid #bababa;
  -webkit-transform: rotate(45deg);
}

.gw-nav-list>li.active { background-color: #fff; }

.gw-nav-list>li>a {
  display: block;
  height: 38px;
  line-height: 36px;
  padding: 0 16px 0 7px;
  background-color: #f9f9f9;
  color: #585858;
  text-shadow: none!important;
  font-size: 17px;
  text-decoration: none;
}

.gw-open > a { outline: 0; }

.gw-nav-list>li.gw-open { border-bottom-color: #e5e5e5 }

.gw-nav-list>li.gw-open>a {
  background-color: #fafafa;
  color: #1963aa
}

.gw-nav-list .gw-open>a,
.gw-nav-list .gw-open>a:hover,
.gw-nav-list .gw-open>a:focus { background-color: #fafafa }

.gw-nav .gw-open > a,
.gw-nav .gw-open > a:hover,
.gw-nav .gw-open > a:focus {
  background-color: #eee;
  border-color: #428bca;
}

.gw-nav-list>li.active>a,
.gw-nav-list>li.active>a:hover,
.gw-nav-list>li.active>a:focus,
.gw-nav-list>li.active>a:active {
  background-color: #fff;
  color: #dd4814;
  font-weight: bold;
  font-size: 17px;
}

.gw-nav-list>li>a,
.gw-nav-list .gw-nav-header { margin: 0 }
.gw-nav-list>li.active>a>[class*="icon-"] {
 font-weight: normal
}

.gw-nav-list>li.active>a:hover:before { display: none }

.gw-nav-list>li.active:before {
  display: inline-block;
  content: "";
  position: absolute;
  right: -2px;
  top: -1px;
  bottom: 0;
  z-index: 1;
  border: 2px solid #dd4814;
  border-width: 0 2px 0 0
}

.gw-nav-list li.gw-open>a:after { display: none }

.gw-nav-list>li a>.gw-arrow {
  display: inline-block;
  width: 14px!important;
  height: 14px;
  line-height: 14px;
  text-shadow: none;
  font-size: 18px;
  position: absolute;
  right: 11px;
  top: 11px;
  padding: 0;
  color: #666
}

.gw-nav-list>li a:hover>.gw-arrow,
.gw-nav-list>li.active>a>.gw-arrow,
.gw-nav-list>li.gw-open>a>.gw-arrow { color: #1963aa }

.gw-nav-list>li>a>[class*="icon-"]:first-child {
  display: inline-block;
  vertical-align: middle;
  min-width: 30px;
  text-align: center;
  font-size: 18px;
  font-weight: normal;
  margin-right: 2px
}

.gw-nav-list>li.active .gw-submenu {
 display: block -webkit-box-shadow: inset 0px 0px 5px rgba(0,0,0,0.13);
  -moz-box-shadow: inset 0px 0px 5px rgba(0,0,0,0.13);
  box-shadow: inset 0px 0px 5px rgba(0,0,0,0.13);
}

.gw-nav-list>li .gw-submenu {
  font-size: 13px;
  display: none;
  list-style: none;
  margin: 0;
  padding: 0;
  position: relative;
  background-color: #fff;
  border-top: 1px solid #e5e5e5;
}

.gw-nav-list>li .gw-submenu>li {
  margin-left: 0;
  position: relative
}

.gw-nav-list>li .gw-submenu>li>a {
  display: block;
  position: relative;
  color: #616161;
  padding: 7px 0 9px 43px;
  margin: 0;
  border-top: 1px dotted #e4e4e4;
  font-size: 14px;
  text-decoration: none;
}

.gw-nav-list>li .gw-submenu>li>a:focus { text-decoration: none }

.gw-nav-list>li .gw-submenu>li>a:hover {
  text-decoration: none;
  color: #dd4814;
  background-color: rgba(25,25,50,0.1);
}

.gw-nav-list>li .gw-submenu>li.active:after {
  display: inline-block;
  content: "";
  position: absolute;
  right: -1px;
  top: -1px;
  bottom: 0;
  z-index: 1;
  border: 2px solid #dd4814;
}

.gw-nav-list>li .gw-submenu>li.active>a { color: #dd4814 }

.gw-nav-list>li .gw-submenu>li a>[class*="icon-"]:first-child {
  display: none;
  font-size: 12px;
  font-weight: normal;
  width: 18px;
  height: auto;
  line-height: 12px;
  text-align: center;
  position: absolute;
  left: 10px;
  top: 11px;
  z-index: 1;
  background-color: #FFF
}

.gw-nav-list>li .gw-submenu>li.active>a>[class*="icon-"]:first-child,
.gw-nav-list>li .gw-submenu>li:hover>a>[class*="icon-"]:first-child { display: inline-block }

.gw-nav-list>li .gw-submenu>li.active>a>[class*="icon-"]:first-child { color: #c86139 }

.gw-nav-list>li>.gw-submenu>li:first-child>a { border-top: 0px; }

.gw-nav-list li .gw-submenu { overflow: hidden }

.gw-nav-list li.active.gw-open>.gw-submenu>li.active.gw-open>a.dropdown-toggle:after { display: none }

.gw-nav-list li.active>.gw-submenu>li.active>a:after { display: none }

.gw-nav-list li.active.gw-open>.gw-submenu>li.active>a:after { display: block }

.gw-nav-tabs li[class*=" icon-"],
.nav-tabs li[class^="icon-"] {
  width: 1.25em;
  display: inline-block;
  text-align: center
}
/*=================left navibar end=========================================*/

.card {
	padding-top: 50px;
    width: 300px;
    background-color: #fff;
    box-shadow: 0 3px 30px rgba(0, 0, 0, .14);
    color: #444;
    text-align: center;
    font-size: 16px;
}

.card .card-header {
    position: relative;
    height: 48px;
}

.card .card-header .profile-img {
    width: 96px;
    height: 96px;
    border-radius: 1000px;
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 6px solid #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, .2);
}

.card .card-body {
    padding: 10px 40px;
}

.card .card-body .full-name {
    font-size: 20px;
    font-weight: 600;
    text-transform: uppercase;
    margin: 10px 0 0;
}

.card .card-body .username {
    font-size: 13px;
    color: #777;
    margin: 5px 0 0;
}

.card .card-body .city {
    font-weight: 500;
    margin: 10px 0 0;
}

.card .card-body .desc {
    line-height: 24px;
}

.card .social-icon {
    font-size: 18px;
    margin: 0 7px;
}

.card .social-icon.facebook {
    color: #3b5999;
}

.card .social-icon.twitter {
    color: #55acee;
}

.card .social-icon.tumblr {
    color: #34465d;
}

.card .social-icon.youtube {
    color: #cd201f;
}

.card .social-icon.linkedin {
    color: #0077b5;
}

.card .social-icon.google-plus {
    color: #dd4b39;
}


.vr {
    border-right: 1px solid #e6e6e6;
}

@media screen and (max-width: 575px) {
    .card {
        width: 96%;
    }

    .card .card-body {
        padding: 10px 20px;
    }

    .card .card-footer .col {
        padding: 0 10px;
    }

    .card .card-footer .count {
        display: block;
        margin-bottom: 5px;
    }
}
	</style>	
	<script type="text/javascript">
		$(document).ready(function () {
    var nav = function () {
        $('.gw-nav > li > a').click(function () {
            var gw_nav = $('.gw-nav');
            gw_nav.find('li').removeClass('active');
            $('.gw-nav > li > ul > li').removeClass('active');

            var checkElement = $(this).parent();
            var ulDom = checkElement.find('.gw-submenu')[0];

            if (ulDom == undefined) {
                checkElement.addClass('active');
                $('.gw-nav').find('li').find('ul:visible').slideUp();
                return;
            }
            if (ulDom.style.display != 'block') {
                gw_nav.find('li').find('ul:visible').slideUp();
                gw_nav.find('li.init-arrow-up').removeClass('init-arrow-up').addClass('arrow-down');
                gw_nav.find('li.arrow-up').removeClass('arrow-up').addClass('arrow-down');
                checkElement.removeClass('init-arrow-down');
                checkElement.removeClass('arrow-down');
                checkElement.addClass('arrow-up');
                checkElement.addClass('active');
                checkElement.find('ul').slideDown(300);
            } else {
                checkElement.removeClass('init-arrow-up');
                checkElement.removeClass('arrow-up');
                checkElement.removeClass('active');
                checkElement.addClass('arrow-down');
                checkElement.find('ul').slideUp(300);

            }
        });
        $('.gw-nav > li > ul > li > a').click(function () {
            $(this).parent().parent().parent().removeClass('active');
            $('.gw-nav > li > ul > li').removeClass('active');
            $(this).parent().addClass('active')
        });
    };
    nav();
});


	</script>
<?php require_once ('views/footer.php');  ?>