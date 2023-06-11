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
                <li class="breadcrumb-item active">New domais hosting</li>
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
                                <form action="code.php" method="POST" class="form-control" enctype="multipart/form-data">
                                    <input type="hidden" id="customer_id" name="customer_id" value="<?= $_SESSION['auth_user']["user_id"]; ?>" />

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="typeOfService" class="form-label"><strong>Type of Service</strong></label>
                                            <input type="text" class="form-control" readonly name="service" id="service" value="Hosting" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="domainInfo" class="form-label"><strong>Domain</strong></label>
                                            <input type="text" class="form-control" id="domainInfo" name="domainInfo" required />
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="hostingPlan" class="form-label"><strong>Hosting Plan</strong></label><a href="../page/hospedagem-de-sites" class="float-end" target="_blank">Click here to find out what each plan offers</a>
                                            <select class="form-select" id="hostingPlan" name="hostingPlan" required>
                                                <option value="">Select hosting plan</option>
                                                <option value="Redirect">Redirect site</option>
                                                <option value="Light">Plano Light</option>
                                                <option value="Econômico" selected>Plano Econômico ( Recommended )</option>
                                                <option value="Plus">Plano Plus</option>
                                                <option value="WordPress I">Plano WordPress I</option>
                                                <option value="WordPress II">Plano WordPress II</option>
                                                <option value="WordPress III">Plano WordPress III</option>
                                                <option value="Servidor Dedicado">Servidor dedicado</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cobranca" class="form-label"><strong>Billing frequency</strong>:</label>
                                            <select class="form-select" id="billingFrequency" name="billingFrequency" required>
                                                <option value="">Select billing frequency</option>
                                                <option value="1" selected>Monthly</option>
                                                <option value="2">Bimonthly</option>
                                                <option value="3">Quarterly</option>
                                                <option value="6">Semiannually</option>
                                                <option value="12">Annually</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="server" class="form-label"><strong>Server</strong></label>
										<br/>
										<input type="radio" id="server" checked name="server" value="Linux">
										<label for="status2"> Linux</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="radio" id="server" name="server" value="Windows">
										<label for="status1"> Windows</label>
                                        </div> 											
                                        <div class="col-md-6 mb-3">
                                            <br />
                                            <input type="reset" class="btn btn-warning" value="&nbsp;&nbsp;Reset&nbsp;&nbsp;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="index.php" class="btn btn-danger">&nbsp;&nbsp; Back &nbsp;&nbsp;</a>
                                            <input type="submit" class="btn btn-primary float-end" id="hosting_add" name="hosting_add" value="Update Service">
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>




<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>