<?php 
require_once 'authentication.php';
require_once 'includes/header.php';
require_once 'assets/js/scripts.js';
?>

        <div class="container-fluid px-4">
            <h1 class="mt-5">Add Users</h1>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="register-view.php">Users</a></li>
                <li class="breadcrumb-item active">Add Users</li>
            </ol>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <strong> Add User</strong>
                        </div>
                        <div class="card-body">

							<form action="code.php" method="POST" class="form-control" />
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for=""><strong>Fist Name</strong></label>
										<input  required type="text" id="fname" name="fname" class="form-control" />
									</div>
									<div class="col-md-6 mb-3">
										<label for=""><strong>Last Name</strong></label>
										<input  required type="text" id="lname" name="lname" class="form-control" onblur="suggestUserName()" />
									</div>
									<div class="col-md-4 mb-3">
										<label for=""><strong>Email Address</strong></label>
										<input  required type="email" name="email" id="email"  class="form-control" />
									</div>
									<div class="col-md-2 mb-3">
										<label for=""><strong>Username</strong></label>
										<input  required type="text" id="uname" name="uname" class="form-control" />
									</div>
									<div class="col-md-6 mb-3">
										<label for=""><strong>Password</strong></label>
										<input  required type="text" id="password" name="password" class="form-control" />
									</div>
									<div class="col-md-3 mb-3">
										<label for=""><strong>Role as</strong></label>
										<br/>
										<select  required id="role_as" name="role_as" class="form-control">
											<option value="">&nbsp; -- Select Role</option>
											<option disabled class="separator"></option>
											
											<option value="0">&nbsp; User</option>
											<option value="1">&nbsp; Administrator</option>											
										</select>
									</div>
									<div class="col-md-3 mb-3">
										<label for=""><strong>Status</strong></label>
										<br/>
										<input type="radio" id="status" name="status" value="1">
										<label for="status1"> Actived</label>
										&nbsp;&nbsp;&nbsp;&nbsp;
										<input checked type="radio" id="status" name="status" value="0">
										<label for="status2"> Inactived</label>	
									</div>
									
									<div class="col-md-6 mb-3">
										<input type="reset" class="btn btn-warning" value="&nbsp;&nbsp;Reset&nbsp;&nbsp;">
										&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="register-view.php" class="btn btn-danger">&nbsp;&nbsp; Back &nbsp;&nbsp;</a>
										<input type="submit" class="btn btn-primary float-end" id="AddUser" name="AddUser" value="Add User">
										&nbsp;&nbsp;&nbsp;&nbsp;
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