<?php

require_once ('../Config.php');
unset($_SESSION['user_admin']);
unset($_SESSION['user_id']);
unset($_SESSION['user_fullname']);
unset($_SESSION['user_img']);
//session_destroy();
require_once ('../system/core.php');
redirect('login.php');
 ?>
