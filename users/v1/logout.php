<?php
require_once ("include/initialize.php");

// 1. Find the session
@session_start();

unset( $_SESSION['id'] );
unset( $_SESSION['first_name'] );
unset( $_SESSION['last_name'] );
unset( $_SESSION['username'] );

//session_destroy();
redirect(web_root."login.php?logout=1");
set_flag("LOGOUT_USER");

?>