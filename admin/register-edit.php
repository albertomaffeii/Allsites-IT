<?php 
require_once 'authentication.php';
require_once 'includes/header.php';
?>

        <div class="container-fluid px-4">
            <h1 class="mt-3">Edit Users</h1>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="register-view.php">Users</a></li>
                <li class="breadcrumb-item active">Edit Users</li>
            </ol>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <strong> Edit User</strong>
                        </div>
                        <div class="card-body">

							<?php
							// Busca user pelo id
							if(isset($_GET['code'])):

								$users_run = $mysqli -> query("SELECT * FROM users where id='" . $tool->base64url_decode($_GET['code']) . "'");

								if($mysqli -> affected_rows > 0):
									
									foreach ($users_run as $user) {
										?>

										<form action="code.php" method="POST" class="form-control" />
											<input type="hidden" id="user_id" name="user_id" value="<?=$tool->base64url_decode($_GET['code']); ?>" />
											<div class="row">
												<div class="col-md-6 mb-3">
													<label for=""><strong>Fist Name</strong></label>
													<input type="text" id="fname" name="fname" maxlength="30" value="<?php echo $user['fname']; ?>" class="form-control" />
												</div>
												<div class="col-md-6 mb-3">
													<label for=""><strong>Last Name</strong></label>
													<input type="text" id="lname" name="lname" maxlength="30" value="<?php echo $user['lname']; ?>" class="form-control" />
												</div>
												<div class="col-md-4 mb-3">
													<label for=""><strong>Email Address</strong></label>
													<input type="email" name="email" maxlength="191" id="email" value="<?php echo $user['email']; ?>" class="form-control" />
												</div>
												<div class="col-md-2 mb-3">
													<label for=""><strong>Username</strong></label>
													<input type="text" id="uname" name="uname" maxlength="30" value="<?php echo $user['username']; ?>" class="form-control" />
												</div>
												<div class="col-md-6 mb-3">
													<label for=""><strong>Password</strong></label>
													<input type="text" id="password" name="password" maxlength="30" value="<?php echo $user['password']; ?>" class="form-control" />
												</div>
												<div class="col-md-3 mb-3">
													<label for=""><strong>Role as</strong></label>
													<br/>
													<select id="role_as" name="role_as" class="form-control">
														<option value="">&nbsp; -- Select Role</option>
														<option disabled class="separator"></option>
														
														<option value="0" <?= $user['role_as'] == 0 ? 'selected':''; ?> >&nbsp; User</option>
														<option value="1" <?= $user['role_as'] == 1 ? 'selected':''; ?> >&nbsp; Administrator</option>											
													</select>
												</div>
												<div class="col-md-3 mb-3">
													<label for=""><strong>Status</strong></label>
													<br/>
													<input type="radio" id="status" name="status" <?= $user['status'] == 0 ? 'checked':''; ?> value="0">
													<label for="status1"> Actived</label>
													&nbsp;&nbsp;&nbsp;&nbsp;
													<input type="radio" id="status" name="status" <?= $user['status'] == 1 ? 'checked':''; ?> value="1">		<label for="status2"> Inactived</label>												
												</div>
												
												<div class="col-md-6 mb-3">
													<input type="reset" class="btn btn-warning" value="&nbsp;&nbsp; Reset &nbsp;&nbsp;">
													&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="register-view.php" class="btn btn-danger">&nbsp;&nbsp;&nbsp; Back &nbsp;&nbsp;&nbsp;</a>
													
													<input type="submit" class="btn btn-primary float-end" id="UpdateUser" name="UpdateUser" value="&nbsp; Update &nbsp;">
												</div>
											</div>
										</form>
									<?php 
											
								} 
						
								endif;
							endif;?>
                        </div>
                    </div>  
                </div>
            </div>
        </div>




<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>