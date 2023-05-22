<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

require_once 'includes/config.php';

$page_title = "Logout page";
$meta_description = "Left the Allsites IT Dashboard";
$meta_keywords = "php, html, css, laravel, mysql, codeigniter, react, js";

require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<div class="container">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Logout</li>
    </ol>
	
	<div id="layoutError">
		<div id="layoutError_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="text-center mt-4">
								<h1 class="display-1">You left!</h1>
								<p class="lead">Logged out Successfully</p>
								<p>To access the dashboard again, click Login.</p>
								<p>or</p>
								<a href="index.php">
									<i class="fas fa-arrow-left me-1"></i>
									<a href="index.php">Return to home</a>
								</a>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>
	<div style="height: 10vh"></div> 
</div>

<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>