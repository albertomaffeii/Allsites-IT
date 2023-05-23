<?php
session_start();
// setar url no htaccess
$raiz = $_SERVER['DOCUMENT_ROOT'];

// Set o banco de dados
require_once $raiz . '/Allsites-IT/admin/config/dbcon.php';


// Tem que corrigir o path no .htaccess também
function base_url($slug) {
	return "http://localhost/Allsites-IT/" . $slug;
}

// Select idioma
if (!isset($_SESSION['lang'])): 

	$_SESSION['lang'] = "en";

elseif (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])):

	if ($_GET['lang'] == "en"):
		$_SESSION['lang'] = "en";
	elseif ($_GET['lang'] == "it"):
		$_SESSION['lang'] = "it";
	elseif ($_GET['lang'] == "ptbr"):
		$_SESSION['lang'] = "ptbr";
	endif;

endif;

require_once "./libraries/languages/" . $_SESSION['lang'] . ".php";

?>