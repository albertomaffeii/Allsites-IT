<?php
session_start();
require_once 'config/dbcon.php';

if(!isset($_SESSION['auth']) != 0):
	
	$_SESSION['message'] = "Login to Access Dashboard";
	header("Location: index.php");
	exit(0);

else:
    
    if($_SESSION['auth_role'] == 0):

	$_SESSION['message'] = "You are not autorised as ADMIN";
	header("Location: ../login.php");
	exit(0);
        
    endif;

endif;

?>