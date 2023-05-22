<?php
require_once '../includes/config.php';

$page_title = "Error 404";
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
							<h1 class="display-1">404</h1>
							<p class="lead">Página não encontrada</p>
							<p>O erro 404 é uma mensagem automática do servidor que indica que a URL solicitada não pode ser encontrada no servidor. As principais causas para o erro são páginas removidas do site, modificação na URL sem um redirecionamento e erros de digitação no navegador.</p>
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
