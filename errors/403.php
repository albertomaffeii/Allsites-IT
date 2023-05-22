<?php
require_once '../includes/config.php';

$page_title = "Error 403";
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
							<h1 class="display-1">403</h1>
							<p class="lead">Unauthorized</p>
							<p>O HTTP ERROR 403 significa que o usu�rio ou o navegador tentou acessar um recurso ou uma p�gina que n�o tem permiss�o para ver123. O servidor entendeu a solicita��o, mas se recusou a atend�-la, pois as credenciais de autentica��o foram insuficientes ou inexistentes145. Esse � um erro do lado do cliente, que faz parte do grupo de c�digos de status 4xx245.</p>
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
