<?php
session_start();
require_once 'config/dbcon.php';

if(!isset($_SESSION['auth']) != 0):
	
	$_SESSION['message'] = "You are not autorised to Access Dashboard";
	header("Location: ../login.php");
	exit(0);

else:
    
    if($_SESSION['auth_role'] == 0):
		$_SESSION['message'] = "You are autorised to Access Dashboard";        
    endif;

endif;

?>