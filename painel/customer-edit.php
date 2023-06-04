<?php 
require_once 'authentication.php';
require_once 'includes/header.php';
require_once 'assets/js/scripts.js';

// Busca user pelo id
if(isset($_GET['code'])):

  $customers_run = $mysqli -> query("SELECT * FROM customers where user_id='" . $tool->base64url_decode($_GET['code']) . "' LIMIT 1");

  if($mysqli -> affected_rows > 0): 
  
    foreach ($customers_run as $customer) { ?>

      <div class="container-fluid px-4">
      <div style="height: 2vh"></div> 

        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">My Customer Data</li>
        </ol>

        <div class="row mt-4">
          <div class="col-md-12">
            <!-- Bloco de message -->
				    <?php include('message.php'); ?>
            <div class="card">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <strong>My Customer Data</strong>
              </div>
              
              <div class="card-body">
                <form action="code.php" method="POST" class="form-control" />
                  <div class="row">
                    <div class="col-md-10 mb-3">
                      <label for=""><strong>Name*</strong></label>
                      <input type="text" class="form-control" id="name" name="name" required maxlength="100" value="<?= $customer['name']; ?>" />
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for=""><strong>Customer code</strong>: </label>
                      <input type="number" class="form-control" readonly id="customer_id" name="customer_id" value="<?= $customer['customer_id']; ?>" />
                    </div> 
                    
                  <div class="col-md-12 mb-3">
                  <label for="address" class="form-label"><strong>Address*</strong></label>
                  <input type="text" class="form-control" id="address" name="address" required maxlength="150" value="<?= $customer['address']; ?>" />
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="city" class="form-label"><strong>City*</strong></label>
                      <input type="text" class="form-control" id="city" name="city" required maxlength="100" value="<?= $customer['city']; ?>" />
                    </div>
                    <div class="col-md-5 mb-3">
                      <label for="regiao" class="form-label"><strong>Neighborhood</strong></label>
                      <input type="text" class="form-control" id="regiao" name="regiao"  maxlength="30" value="<?= $customer['regiao']; ?>" />
                    </div>
                    <div class="col-md-1 mb-3">
                      <label for="state" class="form-label"><strong>State*</strong></label>
                      <input type="text" class="form-control" id="state" name="state" required maxlength="2" value="<?= $customer['state']; ?>" />
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="tax_code1" class="form-label"><strong>Tax Code*</strong></label>
                      <input type="text" class="form-control" id="tax_code1" name="tax_code1" required  maxlength="20" value="<?= $customer['tax_code1']; ?>" />
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="tax_code2" class="form-label"><strong>Other Tax Code</strong></label>
                      <input type="text" class="form-control" id="tax_code2" name="tax_code2" maxlength="20" value="<?= $customer['tax_code2']; ?>" />
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="phone1" class="form-label"><strong>Cell Phone*</strong></label>
                      <input type="tel" class="form-control" id="phone1" name="phone1" required  maxlength="20" value="<?= $customer['phone1']; ?>" />
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="phone2" class="form-label"><strong>Other Phone</strong></label>
                      <input type="tel" class="form-control" id="phone2" name="phone2" maxlength="20" value="<?= $customer['phone2']; ?>" />
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="email1" class="form-label"><strong>Billing E-mail*</strong></label>
                      <input type="email" class="form-control" id="email1" name="email1" required maxlength="100" value="<?= $customer['email1']; ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="email2" class="form-label"><strong>Contact E-mail</strong></label>
                      <input type="email" class="form-control" id="email2" name="email2" maxlength="100" value="<?= $customer['email2']; ?>">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <input type="reset" class="btn btn-warning" value="&nbsp;&nbsp; Reset &nbsp;&nbsp;">
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="index.php" class="btn btn-danger">&nbsp;&nbsp;&nbsp; Back &nbsp;&nbsp;&nbsp;</a>
                      
                      <input type="submit" class="btn btn-primary float-end" id="UpdateCustomer" name="UpdateCustomer" value="&nbsp; Update &nbsp;">
                    </div>
                    <div class="col-md-6 mb-3 row">
                      <div class="col-md-3">
                        <label><strong>Last update: </strong></label>
                      </div>
                      <div class="col-md-9">
                        <?php
                        //Format data
                        $lang = 'd/m/Y \a\t H:i:s';
                        $date = date_create($customer['last_update']);
                        echo date_format($date, $lang); ?>
                      </div>

                      <div class="col-md-3">
                        <label><strong>Create at: </strong></label>
                      </div>
                      <div class="col-md-9">
                        <?php
                        $date = date_create($customer['created_at']);
                        echo date_format($date, $lang);
                        ?>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>  
          </div>
        </div>
      </div>
    <?php
    }  
  endif;
endif;?>




<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>