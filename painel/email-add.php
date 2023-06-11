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
                <li class="breadcrumb-item active">Extra Email Space</li>
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
                            <div class="container">
                                <form action="code.php" method="POST" class="form-control">
                                    <input type="text" id="customer_id" name="customer_id" value="<?=$tool->base64url_decode($_GET['code']); ?>" />

											<div class="row">
												<div class="col-md-4" style="background-color: #f8f9fa; height: 20vh;">
													<!-- Conteúdo do primeiro div -->
													<label for="typeOfService" class="form-label"><strong>Type of Service</strong>: <?=$service['service'];?></label><br>
													<label for="domain" class="form-label"><strong>Domain</strong>: <?=$service['domain'];?></strong></label><br>
													<label for="createDateDetail" class="form-label"><strong>Hosting Plan</strong>: <?=$service['plan'];?></strong></label><br>
													<label for="createDateDetail" class="form-label"><strong>Create Date</strong>: <?=$service['created_at'];?></strong></label>	
												</div>
												<div class="col-md-8">
													<div class="row">
														<div class="col-md-4" style="height: 10vh;">
															<!-- Conteúdo do segundo div -->
															<label for="status" class="form-label"><strong>Status</strong>:</label>
															<select class="form-select" id="status" name="status" required>
																<option value="">Select status</option>
																<option value="1" <?= $service['status'] == '1' ? 'selected':''; ?> >ACTIVE</option>
																<option value="0" <?= $service['status'] == '0' ? 'selected':''; ?> >INACTIVE</option>
															</select>
														</div>
													</div>
													<style>
														.counter-container {
															display: flex;
															align-items: center;
															gap: 10px;
															margin-bottom: 20px;
														}
													</style>
													<div class="row">
														<div class="col" style="height: 10vh;">
															<!-- Conteúdo do terceiro div -->
															<label for="cobranca" class="form-label"><strong>Billing frequency</strong>:</label>

                                                                <div class="container row col-md-4">
                                                                    <div class="counter-container">
                                                                        <a href="#" class="btn btn-outline-danger" id="decrease">  -  </a>
                                                                        <input type="number" class="form-control" id="quantity" name="quantity" value="<?=$service['quantity'];?>" min="0" max="99">
                                                                        <a href="#" class="btn btn-outline-info" id="increase">  +  </a>
                                                                    </div>
                                                                </div>
															
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
													<input type="submit" class="btn btn-primary" id="email_update" name="email_update" value="Update Service">
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

        <script>
            document.getElementById('increase').addEventListener('click', function() {
                var quantityField = document.getElementById('quantity');
                var currentQuantity = parseInt(quantityField.value);
                var incrementedQuantity = currentQuantity + 1;
                if (incrementedQuantity <= 99) {
                quantityField.value = incrementedQuantity;
                }
            });

            document.getElementById('decrease').addEventListener('click', function() {
                var quantityField = document.getElementById('quantity');
                var currentQuantity = parseInt(quantityField.value);
                var decrementedQuantity = currentQuantity - 1;
                if (decrementedQuantity >= 0) {
                quantityField.value = decrementedQuantity;
                }
            });
        </script>


<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>