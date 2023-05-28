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

	<div class="card col-">
		<div class="card-body">
		<div style="height: 5vh"></div>
			<section class="page-section bg-light" id="team">
				<div class="container">
					<div class="text-center">
						<h2 class="section-heading text-uppercase">Hospedagem de Sites</h2>
						<h3 class="section-subheading fs-5 text-muted">Escolha o plano de Hospedagem de Sites ideal para o seu projeto </h3>
						<h2 class="section-heading text-uppercase">planos</h2>
					</div>
					<div class="row">
						<!-- Linux/Windows Light -->
						<div class="col-md-4">
							<div class="card col-md-12">
								<div class="card-header bg-white">
									<center><img src="./libraries/images/light.gif"></center>
								</div>
								<div class="card-body">
									<div class="card-box">
										<p class="fw-semibold">Ideal para colocar o seu site em HTML ou PHP e MySql no ar e iniciar o seu projeto em um ambiente de qualidade.</p>
										<ul>
											<h6 class="fw-semibold">Armazenamento</h6>
											<li><code>Servidores</code>: Linux/Windows</li>
											<li><code>Memória</code>: 128 MB</li>
											<li><code>Espaço em disco</code>: 2 GB</li>
											<li><code>Espaço para criar quantas contas de email precisar</code>: 1 GB</li>
											<li><code>Número de Processos</code>: 1 Unidade</li>
											<li><code>Limite de envio de emails autenticados</code>: 100 envios por hora</li>
											<li><code>Limite de envio de emails por dia pelo site</code>: 4.000 destinatários</li>
											<li><code>Mapeamento</code>: 10</li>
											<li><code>Migração de outros provedores</code>: Grátis</li>
											<li><code>SSL</code>: Grátis</li>
											<li><code>Ferramenta Criador de Site</code>: Grátis</li>
											<h6 class="fw-semibold"><br />Banco de dados</h6>
											<li><code>MySQL 5.6 - Crie quantos bancos quiser:</code> 3.0 GB</li>
											<li><code>PostgreSQL 9.x - Crie quantos bancos quiser:</code> 2.0 GB</li>
											<li><code>Firebird 2.5 (300 MB por base):</code> 1,25 GB</li>
											<li><code>MongoDB 3.2:</code> XXX </li>
											<li><code>SQL Server:</code> XXX </li>
										</ul>
										<center><button>Quero este!</button></center>
									</div>
								</div>
								<div class="card-footer"><center><span class="fs-1 text-danger">R$ 40,00</span><span class="fs-5 fw-semibold">/mês</span></center></div>
							</div>
						</div>
					
						<!-- Linux/Windows Econômico -->
						<div class="col-md-4">
							<div class="card col-md-12">
								<div class="card-header bg-white">
									<center><img src="./libraries/images/economico.gif"></center>
								</div>
								<div class="card-body">
									<div class="card-box">
										<p class="fw-semibold">Este é para você que quer o seu site com um sistema leve ou uma página em WordPress com recursos avançados de velocidade e segurança.</p>
										<ul>
											<h6 class="fw-semibold">Armazenamento</h6>
											<li><code>Servidores</code>: Linux/Windows</li>
											<li><code>Memória</code>: 256 MB</li>
											<li><code>Espaço em disco</code>: 5 GB</li>
											<li><code>Espaço para criar quantas contas de email precisar</code>: 3 GB</li>
											<li><code>Número de Processos</code>: 2 Unidade</li>
											<li><code>Limite de envio de emails autenticados</code>: 150 envios por hora</li>
											<li><code>Limite de envio de emails por dia pelo site</code>: 6.000 destinatários</li>
											<li><code>Mapeamento</code>: 20</li>
											<li><code>Migração de outros provedores</code>: Grátis</li>
											<li><code>SSL</code>: Grátis</li>
											<li><code>Ferramenta Criador de Site</code>: Grátis</li>
											<h6 class="fw-semibold"><br />Banco de dados</h6>
											<li><code>MySQL 5.6 - Crie quantos bancos quiser:</code> 5 GB</li>
											<li><code>PostgreSQL 9.x - Crie quantos bancos quiser:</code> 3.5 GB</li>
											<li><code>Firebird 2.5 (300 MB por base):</code> 1,87 GB</li>
											<li><code>MongoDB 3.2:</code> XXX </li>
											<li><code>SQL Server:</code> Consulte </li>
										</ul>
										<center><button>Quero este!</button></center>
									</div>
								</div>
								<div class="card-footer"><center><span class="fs-1 text-danger">R$ 45,00</span><span class="fs-5 fw-semibold">/mês</span></center></div>
							</div>
						</div>
					
						<!-- Linux/Windows Plus -->
						<div class="col-md-4">
							<div class="card col-md-12">
								<div class="card-header bg-white">
									<center><img src="./libraries/images/plus.gif"></center>
								</div>
								<div class="card-body">
									<div class="card-box">
										<p class="fw-semibold">Ideal para projeto  robustos baseados na web, com melhores recursos de velocidade, segurança e diversas bases de dados.</p>
										<ul>
											<h6 class="fw-semibold">Armazenamento</h6>
											<li><code>Servidores</code>: Linux/Windows</li>
											<li><code>Memória</code>: 512 MB</li>
											<li><code>Espaço em disco</code>: 10 GB</li>
											<li><code>Espaço para criar quantas contas de email precisar</code>: 10 GB</li>
											<li><code>Número de Processos</code>: 4 Unidade</li>
											<li><code>Limite de envio de emails autenticados</code>: 200 envios por hora</li>
											<li><code>Limite de envio de emails por dia pelo site</code>: 8.000 destinatários</li>
											<li><code>Mapeamento</code>: 30</li>
											<li><code>Migração de outros provedores</code>: Grátis</li>
											<li><code>SSL Grátis</code></li>
											<li><code>Ferramenta Criador de Site Grátis</code></li>
											<h6 class="fw-semibold"><br />Banco de dados</h6>
											<li><code>MySQL 5.6 - Crie quantos bancos quiser:</code> 10 GB</li>
											<li><code>PostgreSQL 9.x - Crie quantos bancos quiser:</code> 5.0 GB</li>
											<li><code>Firebird 2.5 (300 MB por base):</code> 3,12 GB</li>
											<li><code>MongoDB 3.2:</code> 1 banco de 2 GB</li>
											<li><code>SQL Server:</code> Consulte </li>
										</ul>
										<center><button>Quero este!</button></center>
									</div>
								</div>
								<div class="card-footer"><center><span class="fs-1 text-danger">R$ 130,00</span><span class="fs-5 fw-semibold">/mês</span></center></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<div style="height: 10vh"></div>
	<div class="card col-">
		<div class="card-body">
			<table class="table table-hover table-sm">
				<caption>List of users</caption>
				<thead>
					<tr>
						<th scope="col" colspan="2">Características da Hospedagem de Sites</th>
					</tr>
					</thead>

					<tbody>
					<tr>
						<th scope="row">Linguagens suportadas:</th>
							<td>
								<table class="table table-bordered table-striped table-sm">
									<tr><td>PHP</td><td>8.2, 8.1, 8.0 e 7.x</td></tr>
									<tr><td>ASP e ASP.Net Windows 2019</td><td>ASP.Net 4.8 e ASP.Net Classic</td></tr>
									<tr><td>Python</td><td>3.9</td></tr>
									<tr><td>Ruby on Rails</td><td>3.x</td></tr>
								</table>
							</td>
						</th>
					</tr>
					<tr>
						<th scope="row">Banco de dados SSD:</th>
							<td>
								<table class="table table-bordered table-striped table-sm">
									<tr><td>PostgreSQL</td><td>13.x (Ilimitados Bancos de Dados)</td></tr>
									<tr><td>MongoDB</td><td>3.2</td></tr>
									<tr><td>ACCESS</td><td>2016</td></tr>
									<tr><td>Firebird</td><td>3</td></tr>
									<tr><td>SQL Server</td><td>2014</td></tr>
									<tr><td>MariaDB 10.6</td><td>Equivalente ao MySQL 8 (Ilimitados Bancos de Dados)</td></tr>
									<tr><td>SQLite</td><td>3.x</td></tr>
								</table>
							</td>
						</th>
					</tr>
					<tr>
						<th scope="row">Frameworks compatíveis:</th>
							<td>
								<table class="table table-bordered table-striped table-sm">
									<tr><td>Django</td><td>Pylons</td></tr>
									<tr><td>Flask</td><td>Flask</td></tr>
									<tr><td>Web2py</td><td>TurboGears</td></tr>
									<tr><td>Phalcon PHP</td><td>laravel</td></tr>
									<tr><td>Symfony</td><td>Zend Framework</td></tr>
									<tr><td>Rails</td><td>Sinatra</td></tr>
								</table>
							</td>
						</th>
					</tr>
					<tr>
						<th scope="row">Proteção e Segurança:</th>
							<td>
								<table class="table table-bordered table-striped table-sm">
									<tr><td>Firewall</td><td>Email com AntiVírus e AntiSpam</td></tr>
									<tr><td>Certificado SSL com IP Dedicado</td><td>Backup incremental diário de emails, sites e banco de dados</td></tr>
									<tr><td colspan="2">Servidores de DNS Redundantes</td></tr>
								</table>
							</td>
						</th>
					</tr>
					<tr>
						<th scope="row">Servidores:</th>
							<td>
								<table class="table table-bordered table-striped table-sm">
									<tr><td>ASP Classic</td><td>Servidor Windows 2019 (IIS10) .Net core nas versões 5.0.17 e 6.0.12</td></tr>
									<tr><td>ASP.Net nas versões 4.0/4.5/4.8 e 2.0/3.5 </td><td>Nginx</td></tr>
									<tr><td></td><td></td></tr>
								</table>
							</td>
						</th>
					</tr>
					<tr>
						<th scope="row">Serviços Adicionais:</th>
							<td>
								<table class="table table-bordered table-striped table-sm">
									<tr><td>Certificado SSL Let's Encrypt Gratuito </td><td>Criador de Site - Plano I incluído gratuitamente</td></tr>
									<tr><td>Certificado SSL SNI - R$ 254,00 ao ano por site</td><td>Mapeamento adicional - R$ 2,00 ao mês cada</td></tr>
									<tr><td>Backup (Emails, bancos ou FTP)
										R$ 30,00 por procedimento</td><td>Cronjob R$ 10,00 por mês cada 20 tarefas</td></tr>
									<tr><td>SQL Server 2014 - R$ 90,00 por mês cada 450 MB</td><td>Backup completo - R$ 100,00 por procedimento</td></tr>
									<tr><td>Espaço em Disco Extra - R$ 10,00 ao mês por GB</td><td>Espaço de E-Mail Extra - R$ 10,00 ao mês por GB</td></tr>
								</table>
							</td>
						</th>
					</tr>
					<tr>
						<th scope="row">Caracteristicas padrão:</th>
							<td>
								<table class="table table-bordered table-striped table-sm">
									<tr><td>Painel de Controle Próprio</td><td>Webmail - RoundCube</td></tr>
									<tr><td>Acesso via FTP em Linux</td><td>Certificado SSL para Emails</td></tr>
									<tr><td>Acesso via FTP em Windows</td><td>Integração com Google PageSpeed e New Relic</td></tr>
									<tr><td>Suporte a Subversion (SVN)</td><td>MySql PhpMyAdmin</td></tr>
									<tr><td colspan="2">Integração com ferramentas de Git como o Bitbucket, GitLab e GitHub</td></tr>
									<tr><td colspan="2">Componentes disponíveis em ambiente Windows: ASPMailer, AspPdf, XZIP, JMail, ASPEMail, ASPSmartUpload, AspJpeg, ASPUpload</td></tr>
								</table>
							</td>
						</th>
					</tr>
				</thead>
			</table>			
		</div>
	</div>
</div>
    
<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>