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
				<?php //include('message.php'); ?>
				
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
					<div class="col-xl-3 col-md-6">
						<div class="card bg-primary text-white mb-4">
							<div class="card-body">
								Total Categories
								<h4 class="mb-0">
									<?php
										$dash_category_query = "SELECT * FROM categories";
										$dash_category_query_run = $mysqli -> query($dash_category_query);
										if($dash_category_query_comp = $mysqli -> affected_rows):
											echo $dash_category_query_comp;
										else:
											echo "No Data";
										endif;
									?>
								</h4>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<a class="small text-white stretched-link" href="#">View Details</a>
								<div class="small text-white"><i class="fas fa-angle-right"></i></div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="card bg-warning text-white mb-4">
							<div class="card-body">
								Total Posts
								<h4 class="mb-0">
									<?php
										$dash_posts_query = "SELECT * FROM posts";
										$dash_posts_query_run = $mysqli -> query($dash_posts_query);
										if($dash_posts_query_comp = $mysqli -> affected_rows):
											echo $dash_posts_query_comp;
										else:
											echo "No Data";
										endif;
									?>
								</h4>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<a class="small text-white stretched-link" href="#">View Details</a>
								<div class="small text-white"><i class="fas fa-angle-right"></i></div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="card bg-success text-white mb-4">
							<div class="card-body">
								Total Actives Users
								<h4 class="mb-0">
									<?php
										$dash_users_query = "SELECT * FROM users WHERE status = '0'";
										$dash_users_query_run = $mysqli -> query($dash_users_query);
										if($dash_users_query_comp = $mysqli -> affected_rows):
											echo $dash_users_query_comp;
										else:
											echo "No Data";
										endif;
									?>
								</h4>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<a class="small text-white stretched-link" href="#">View Details</a>
								<div class="small text-white"><i class="fas fa-angle-right"></i></div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="card bg-danger text-white mb-4">
							<div class="card-body">
								Total Block Users
								<h4 class="mb-0">
									<?php
										$dash_users_query = "SELECT * FROM users WHERE status = '1'";
										$dash_users_query_run = $mysqli -> query($dash_users_query);
										if($dash_users_query_comp = $mysqli -> affected_rows):
											echo $dash_users_query_comp;
										else:
											echo "0";
										endif;
									?>
								</h4>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<a class="small text-white stretched-link" href="#">View Details</a>
								<div class="small text-white"><i class="fas fa-angle-right"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>


<?php
//require_once 'includes/footer.php';
//require_once 'includes/scripts.php';
?>