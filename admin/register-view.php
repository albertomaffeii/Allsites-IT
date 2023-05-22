<?php 
require_once 'authentication.php';
require_once 'includes/header.php';
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
	
			<!-- Bloco de message -->
			<?php include('message.php'); ?>
			
			<div class="card">
                <div class="card-header">
                    <h5> 
						<i class="fas fa-table me-1"></i> Registered User
						<a href="register-add.php" class="btn btn-primary float-end">Add User</a>

                    </h5>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                                <tr>
                                    <th>Code User</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>E-mail</th>
									<th>User tipe</th>	
                                    <th><center>Status</center></th>
                                    <th><center>Edit</center></th>
									<?php if ($_SESSION['auth_role'] == 2): ?>
										<th><center>Delete</center></th>
									<?php endif; ?>
                                </tr>
                        </thead>
                        <tfoot>
                                <tr>
                                    <th>Code User</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>E-mail</th>	
									<th>User tipe</th>	
                                    <th><center>Status</center></th>
                                    <th><center>Edit</center></th>
									<?php if ($_SESSION['auth_role'] == 2): ?>
										<th><center>Delete</center></th>
									<?php endif; ?>
                                </tr>
                        </tfoot>
                        <tbody>

                            <?php
                            $registerUsers = "select * from users";
                            $registerUsers_run = $mysqli -> query($registerUsers);
                            $registerUsers_comp = $mysqli -> affected_rows;
                            if($registerUsers_comp > 0 ):
                                foreach ($registerUsers_run as $row) {
                                ?>
                                    <tr>
                                        <th><?= str_pad($row['id'], 5, 0, STR_PAD_LEFT);?></th>
                                        <th><?=$row['fname'] . ' ' . $row['lname']; ?></th>
                                        <th><?=$row['username']; ?></th>
                                        <th><?=$row['email']; ?></th>
										<th>
											<?php
												if($row['role_as']  == 0):
													echo "User";
												elseif($row['role_as']  == 1):
													echo "Administrator";
												elseif($row['role_as']  == 2):
													echo "Super Admin";
												endif;
											?>
										</th>

                                        <th>
                                            <?php 
                                            //Nomeia o Status
                                            if($row['status'] == 1):
                                                echo "Inactived";
                                            else:
                                                echo "Actived";
                                            endif; 
                                            ?>
                                        </th>
                                        <th>
											<center>
												<a href="register-edit.php?code=<?php echo $tool->base64url_encode($row['id']); ?>" class="btn btn-success">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
											</center>
										</th>
												
										<?php if ($_SESSION['auth_role'] == 2): ?>
											<th>
												<center>
													<form method="POST" action="code.php" name="form_delete" id="form_delete" >
														<button type="submit" name="user_delete" value="<?php echo $row['id']; ?>" class="btn btn-danger">Delete</button>
													</form>
												</center>
											</th>
										<?php endif; ?>
                                    </tr>
                                <?php    
                                }

                            else:

                                echo "<tr><td colspan='6'> No Record Found</td></tr>";

                            endif;
                            ?>
                        </tbody>
                </table>
                </div>                  
        </div>
    </div>


    

<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>