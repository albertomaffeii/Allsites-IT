<?php
require_once '../includes/config.php';

$page_title = "Error 400";
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
							<h1 class="display-1">400</h1>
							<p class="lead">Bad Request</p>
							<p>O c�digo de status de resposta HTTP 400 Bad Request indica que o servidor n�o pode ou n�o ir� processar a requisi��o devido a alguma coisa que foi entendida como um erro do cliente. A maior parte dos erros HTTP 400 s�o provocados por sintaxes incorretas na solicita��o, rotas erradas de solicita��o, ou enquadramento inv�lido da mensagem de solicita��o.</p>
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
