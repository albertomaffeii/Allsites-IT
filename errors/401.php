<?php
require_once '../includes/config.php';

$page_title = "Error 401";
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
							<h1 class="display-1">401</h1>
							<p class="lead">Unauthorized</p>
							<p>O código de resposta de status de erro do cliente HTTP 401 Unauthorized indica que a solicitação não foi aplicada porque não possui credenciais de autenticação válidas para o recurso de destino. Esse status é enviado com um cabeçalho WWW-Authenticate que contém informações sobre como autorizar corretamente.</p>
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