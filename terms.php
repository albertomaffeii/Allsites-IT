<?php
require_once 'includes/config.php';

$page_title = "Terms & Conditions";
$meta_description = "Terms & Conditions of the Allsites IT Dashboard";
$meta_keywords = "php, html, css, laravel, mysql, codeigniter, react, js";

require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<div class="container">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Terms & Conditions</li>
    </ol>

	<div class="card mb-4">
		<div class="card-body">
			<p class="mb-0">
				This page is an example of using static navigation. By removing the
				<code>.sb-nav-fixed</code>
				class from the
				<code>body</code>
				, the top navigation and side navigation will become static on scroll. Scroll down this page to see an example.
			</p>
		</div>
	</div>
	<div style="height: 10vh"></div>
	<div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
</div>
    
<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>