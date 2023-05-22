<?php
session_start();
// setar url nohtaccess
$raiz = $_SERVER['DOCUMENT_ROOT'];

require_once $raiz . '/allsites/admin/config/dbcon.php';

function base_url($slug) {
	return "http://localhost/allsites/" . $slug;
}

// Select idioma
if(!isset($_POST['language']) AND (!isset($_SESSION['language']))): 
	$_SESSION['language'] = 'en';
elseif (isset($_POST['language']))	:
	$_SESSION['language'] = $_POST['language'];
endif;
?>