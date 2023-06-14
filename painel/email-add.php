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
                                    
									<input type="hidden" id="customer_id" name="customer_id" value="<?= $_SESSION['auth_user']["user_id"]; ?>" />

									<div class="row">
										<div class="col-md-6" style="background-color: #f8f9fa; height: 20vh;">
											<!-- Conteúdo do primeiro div -->
											<label for="typeOfService" class="form-label"><strong>Type of Service</strong>: Extra Email Space</label><br>
											<label for="domain" class="form-label"><strong>Select the domain in which the service will be configured</strong>: 
											<select class="form-select" id="domainInfo" name="domainInfo" required>
												<option value="">Select a domain</option>

												<?php												
												$services_query_res = $mysqli -> query("SELECT * FROM services WHERE service='Hosting' AND customer_id = '" . $_SESSION['auth_user']["user_id"] . "' ORDER BY domain ASC");
												if($mysqli -> affected_rows > 0):
													foreach ($services_query_res as $row) {
													?>
														<option value="<?= $row['domain']; ?>"><?= $row['domain']; ?></option>
													<?php
													}
												else:
													echo"<option value=''>No domains found for this customer</option>";
												endif; ?>
											</select>
										</div>
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-12" style="height: 20vh;">
													
													<style>
														.counter-container {
															display: flex;
															align-items: center;
															gap: 10px;
															margin-bottom: 20px;
														}
													</style>
													
													<label for="cobranca" class="form-label"><strong>Number of 1GB packages to be added:</strong>:</label>

													<div class="container row col-md-6">
														<div class="counter-container">
															<a href="#" class="btn btn-outline-danger" id="decrease">  -  </a>
															<input type="number" class="form-control" id="quantity" name="quantity" value="0" min="0" max="99" required>
															<a href="#" class="btn btn-outline-info" id="increase">  +  </a>
														</div>
													</div>
													<a href="../page/hospedagem-de-sites" target="_blank">Click here to find out what each plan offers</a>
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
											<input type="submit" class="btn btn-primary" id="extraEmailUpdate" name="extraEmailUpdate" value="Update Service">
										</div>
									</div>
								</form>
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