<?php 
require_once 'authentication.php';
require_once 'includes/header.php';
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Admin Panel</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>	
	<div class="py-2">
		<div class="container">
			<div class="col-md-12">
				<!-- Bloco de message -->
				<?php include('message.php'); ?>
				
				<div class="col-md-12 mb-3">
					<div class="card">
						<div class="card-header">
							<i class="bi bi-card-image"></i>
							<strong>User info</strong>
						</div>
						<div class="card-body">
							<div class="col-md-12 fluid">
								Logged in as <?php echo $_SESSION["auth_user"]['user_name']; ?> &nbsp;|&nbsp; Last access <?= date('d/m/Y \a\t H:i:s', strtotime($_SESSION['updated_at'])); ?> &nbsp;|&nbsp; <span class="float-end"><?= $_SESSION['mail']	; ?></span>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
				<div class="col-md-12">
	
					<!-- Bloco de message -->
					<?php include('message.php'); ?>

					<div class="row mt-1">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5>
										<i class="fas fa-table me-1"></i>
										Contracted services
									</h5>
								</div>
								<div class="card-body align-items-center">

									<table id="datatablesSimple">
										<thead>
												<tr>
													<th>Ord</th>
													<th>Category</th>
													<th>Service</th>
													<th>Domain</th>
													<th><center>Status</center></th>
													<th><center>Edit</center></th>
													<th><center>Painel de<br>controle</center></th>
												</tr>
										</thead>
										<tfoot>
												<tr>
													<th>Ord</th>
													<th>Category</th>
													<th>Service</th>
													<th>Domain</th>
													<th><center>Status</center></th>
													<th><center>Edit</center></th>
													<th><center>Painel de<br>controle</center></th>
												</tr>
										</tfoot>
										<tbody>
										<?php
											$ServicesQuery = "SELECT * FROM services WHERE customer_id='" .  $_SESSION['auth_user']["user_id"] . "' ORDER BY domain ASC";
											$ServicesQuery_run = $mysqli -> query($ServicesQuery);
											$ServicesQuery_comp = $mysqli -> affected_rows;
											if($ServicesQuery_comp > 0 ):
												foreach ($ServicesQuery_run as $row) {
													$x = $x+1;
												?>
													<tr>
														<th><?= str_pad($x, 3, 0, STR_PAD_LEFT);?></th>
														<th><?=$row['service']; ?></th>
														<th><?php echo $row['server'] . " " . $row['plan']; ?></th>
														<th><span class="fw-bold"><?=$row['domain']; ?></span></th>
														<th><center><?=$row['status'] == '1' ? 'Active':'Inactive';?></center></th>
														<th>
															<center>
																<a href="<?= strtolower($row['service']); ?>-edit.php?code=<?php echo $tool->base64url_encode($row['service_id']); ?>" class="btn btn-success">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
															</center>
														</th>
														<th><center><a href="http://painel.allsites.com.br" target="blank" class="btn btn-success">Access</a></center></th>
																									
													</tr>
												<?php    
												}
											endif;
											?>


										</tbody>
								</table>
								</div>                  
						</div>
					</div>
				</div>
			</div>


<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>