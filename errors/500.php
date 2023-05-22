<?php
require_once '../includes/config.php';

$page_title = "Error 500";
$meta_description = "IT company that offers web systems development services, technical assistance, website hosting and personalized support.";
$meta_keywords = "php, html, css, laravel, mysql, codeigniter, react, js";

require_once '../includes/header.php';
require_once '../includes/navbar.php';
?>

<body>
<div id="layoutError">
	<div style="height: 10vh"></div>
	<div id="layoutError_content">
		<main>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="text-center mt-4">
							<h1 class="display-1">500</h1>
							<p class="lead">Internal Server Error</p>
							<p>The HyperText Transfer Protocol (HTTP) 500 Internal Server Error server error response code indicates that the server encountered an unexpected condition that prevented it from fulfilling the request.</p>
							<p>This error response is a generic "catch-all" response. Usually, this indicates the server cannot find a better 5xx error code to response. Sometimes, server administrators log error responses like the 500 status code with more details about the request to prevent the error from happening again in the future..</p>
							<a href="../index">
								<i class="fas fa-arrow-left me-1"></i>
								Return to Dashboard
							</a>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<div style="height: 10vh"></div>
<?php
require_once '../includes/footer.php';
require_once '../includes/scripts.php';
?>
