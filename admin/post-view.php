<?php 
require_once 'authentication.php';
require_once 'includes/header.php';
?>

<div class="container-fluid px-4">
    <h1 class="mt-3">Posts</h1>

	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
		<li class="breadcrumb-item active"><a href="post-view.php">Posts</a></li>
		<li class="breadcrumb-item active">View Posts</li>
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
								View Posts
								<a href="post-add.php" class="btn btn-primary float-end">Add Post</a>
							</h5>
                        </div>
                        <div class="card-body align-items-center">

							<table id="datatablesSimple">
								<thead>
										<tr>
											<th>Code</th>
											<th>Name</th>
											<th>Category</th>
											<th><center>Image</center></th>
											<th><center>Static page</center></th>
											<th><center>Status</center></th>
											<th><center>Edit</center></th>
											<?php if($_SESSION['auth_role'] == 2): ?>
												<th>Delete</th>
											<?php endif; ?>
										</tr>
								</thead>
								<tfoot>
										<tr>
											<th>Code</th>
											<th>Name</th>
											<th>Category</th>
											<th><center>Image</center></th>
											<th><center>Static page</center></th>
											<th><center>Status</center></th>
											<th><center>Edit</center></th>
											<?php if($_SESSION['auth_role'] == 2): ?>
												<th>Delete</th>
											<?php endif; ?>
										</tr>
								</tfoot>
								<tbody>
								<?php
									//$registerPosts = "SELECT * FROM posts WHERE status!='2'";
									$registerPosts = "SELECT p.*, c.name AS cname FROM posts p, categories c WHERE c.id = p.category_id AND p.status!='2'";
									$registerPosts_run = $mysqli -> query($registerPosts);
									$registerPosts_comp = $mysqli -> affected_rows;
									if($registerPosts_comp > 0 ):
										foreach ($registerPosts_run as $row) {
											if(!$row['image']):
												$imagePost = "images/no-image.png";
											else:
												$imagePost = "posts/" . $row['image'];
											Endif;
										?>
											<tr>
												<th><?= str_pad($row['id'], 5, 0, STR_PAD_LEFT);?></th>
												<th><?=$row['name']; ?></th>
												<th><?=$row['cname']; ?></th>
												<th><center><img src="../libraries/<?=$imagePost;?>" width="60" height="60" border="0" alt=""></center></th>
												<th><center><?=$row['static_page'] == '0' ? 'No':'Yes';?></center></th>
												<th><center><?=$row['status'] == '1' ? 'Hidden':'Visible';?></center></th>
												<th>
													<center>
														<a href="post-edit.php?code=<?php echo $tool->base64url_encode($row['id']); ?>" class="btn btn-success">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
													</center>
												</th>

												<?php if($_SESSION['auth_role'] == 2): ?>
													<th>
														<form method="POST" action="code.php" name="form_delete" id="form_delete" >
															<center>
																<input type="hidden" name="post_id" value="<?=$row['id']; ?>" />
																<button type="submit" name="post_delete" id="post_delete" value="<?=$row['id']; ?>" class="btn btn-danger">Delete</button>
															</center>
														</form>
													</th>
												<?php endif; ?>												
											</tr>
										<?php    
										}
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