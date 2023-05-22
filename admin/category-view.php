<?php 
require_once 'authentication.php';
require_once 'includes/header.php';
?>

<div class="container-fluid px-4">
    <h1 class="mt-3">Categories</h1>

	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item active"><a href="category-view.php">Categories</a></li>
		<li class="breadcrumb-item active">View Category</li>
	</ol>

    <div class="row">
        <div class="col-md-12">
	
			<!-- Bloco de message -->
			<?php include('message.php'); ?>

            <div class="row mt-1">
                <div class="col-md-12">

					<!-- Bloco de message -->
					<?php include 'message.php'; ?>

                    <div class="card">
                        <div class="card-header">
                            <h5>
								<i class="fas fa-table me-1"></i>
								View Category
								<a href="category-add.php" class="btn btn-primary float-end">Add Category</a>
							</h5>
                        </div>
                        <div class="card-body">

							<table id="datatablesSimple">
								<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th><center>Position</center></th>
											<th><center>Status</center></th>
											<th><center>Edit</center></th>
											<?php if($_SESSION['auth_role'] == 2): ?>
												<th><center>Delete</center></th>
											<?php endif; ?>
										</tr>
								</thead>
								<tfoot>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th><center>Position</center></th>
											<th><center>Status</center></th>
											<th><blockquote>Edit</blockquote></th>
											<?php if($_SESSION['auth_role'] == 2): ?>
												<th><center>Delete</center></th>
											<?php endif; ?>
										</tr>
								</tfoot>
								<tbody>

									<?php
									$registerCategories = "SELECT * FROM categories WHERE status!='2'";
									$registerCategories_run = $mysqli -> query($registerCategories);
									$registerCategories_comp = $mysqli -> affected_rows;
									if($registerCategories_comp > 0 ):
										foreach ($registerCategories_run as $row) {
										?>
											<tr>
												<th><?=$row['name']; ?></th>
												<th><?=$row['description']; ?></th>
												<th>
													<center>
														<?php
														IF(!$row['navbar_position']):
															echo "Any Position";
														else:
															echo $row['navbar_position'];
														endif;
														?>
													</center>
												</th>
												<th>
													<center><?=$row['status'] == '1' ? 'Hidden':'Visible';?></center>
												</th>
												<th>
													<center>
														<a href="category-edit.php?code=<?php echo $tool->base64url_encode($row['id']); ?>" class="btn btn-success">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
													</center>
												</th>

												<?php if($_SESSION['auth_role'] == 2): ?>
													<th>
														<center>
															<form method="POST" action="code.php" name="form_delete" id="form_delete" >
																<input type="hidden" name="category_id" value="<?=$row['id']; ?>" />
																<button type="submit" name="category_delete" id="category_delete" value="<?=$row['id']; ?>" class="btn btn-danger">Delete</button>
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