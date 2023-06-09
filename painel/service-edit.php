<?php 
require_once 'authentication.php';
require_once 'includes/header.php';
require_once 'assets/js/scripts.js';
?>

        <div class="container-fluid px-4">
			<div style="height: 2vh"></div>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Products & Serviçes</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <strong> Products & Serviçes</strong>
							<a href="index.php" class="btn btn-danger float-end">&nbsp;&nbsp; Back &nbsp;&nbsp;</a>
                        </div>
                        <div class="card-body">

							<?php
							// Busca Post pelo id
							if(isset($_GET['code'])):

								$service_id = $tool->base64url_decode($_GET['code']);

								$services_query_res = $mysqli -> query("SELECT * FROM services WHERE service_id = '$service_id' LIMIT 1");
								if($mysqli -> affected_rows > 0):
									$service = $services_query_res -> fetch_array(MYSQLI_ASSOC); ?>
									<div class="container">
										<form action="code.php" method="POST" class="form-control" enctype="multipart/form-data">
											<input type="hidden" id="service_id" name="service_id" value="<?=$tool->base64url_decode($_GET['code']); ?>" />

											<div class="row">
												<div class="col-md-3" style="background-color: #f8f9fa; height: 20vh;">
													<!-- Conteúdo do primeiro div -->
													<label for="typeOfService" class="form-label"><strong>Type of Service</strong>: <?=$service['service'];?></label><br>
													<label for="domain" class="form-label"><strong>Domain</strong>: <?=$service['domain'];?></strong></label><br>
													<label for="createDateDetail" class="form-label"><strong>Hosting Plan</strong>: <?=$service['plan'];?></strong></label><br>
													<label for="createDateDetail" class="form-label"><strong>Create Date</strong>: <?=$service['created_at'];?></strong></label>	
												</div>
												<div class="col-md-9">
													<div class="row">
														<div class="col" style="height: 10vh;">
															<!-- Conteúdo do segundo div -->
															<label for="status" class="form-label"><strong>Status</strong>:</label>
															<select class="form-select" id="status" required>
																<option value="">Select status</option>
																<option value="1" <?= $service['status'] == '1' ? 'selected':''; ?> >ACTIVE</option>
																<option value="0" <?= $service['status'] == '0' ? 'selected':''; ?> >INACTIVE</option>
															</select>
														</div>
													</div>
													<div class="row">
														<div class="col" style="height: 10vh;">
															<!-- Conteúdo do terceiro div -->
															<label for="cobranca" class="form-label"><strong>Billing frequency</strong>:</label>
															<select class="form-select" id="billingFrequency" name="billingFrequency" required>
																<option value="">Select billing frequency</option>
																<option value="1" <?= $service['frequency'] == '1' ? 'selected':''; ?> >Monthly</option>
																<option value="2" <?= $service['frequency'] == '2' ? 'selected':''; ?> >Bimonthly</option>
																<option value="3" <?= $service['frequency'] == '3' ? 'selected':''; ?> >Quarterly</option>
																<option value="6" <?= $service['frequency'] == '6' ? 'selected':''; ?> >Semiannually</option>
																<option value="12" <?= $service['frequency'] == '12' ? 'selected':''; ?> >Annually</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div style="height: 1vh"></div>
											<div> 											
												<div class="col-md-6 mb-3">
													<input type="reset" class="btn btn-warning" value="&nbsp;&nbsp;Reset&nbsp;&nbsp;">
													&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="index.php" class="btn btn-danger">&nbsp;&nbsp; Back &nbsp;&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;
													<input type="submit" class="btn btn-primary" id="service_update" name="service_update" value="Update Post">
												</div>
											</div>
										</form>
									<?php 
								endif;
							endif; ?>
                        </div>
                    </div>  
                </div>
            </div>
        </div>




<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>