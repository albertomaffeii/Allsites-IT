<?php 
require_once 'authentication.php';
require_once 'includes/header.php';
require_once 'assets/js/scripts.js';
?>

        <div class="container-fluid px-4">
            <h1 class="mt-5">Edit Posts</h1>

            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="post-view.php">Posts</a></li>
                <li class="breadcrumb-item active">Edit Posts</li>
            </ol>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <strong> Edit Post</strong>
							<a href="post-add.php" class="btn btn-danger float-end">&nbsp;&nbsp; Back &nbsp;&nbsp;</a>
                        </div>
                        <div class="card-body">

							<?php
							// Busca Post pelo id
							if(isset($_GET['code'])):

								$post_id = $tool->base64url_decode($_GET['code']);

								$posts_query_res = $mysqli -> query("SELECT * FROM posts WHERE id='$post_id' LIMIT 1");

								if($mysqli -> affected_rows > 0):

									$post = $posts_query_res -> fetch_array(MYSQLI_ASSOC);

									?>
									
									<form action="code.php" method="POST" class="form-control" enctype="multipart/form-data">
										<input type="hidden" id="post_id" name="post_id" value="<?=$tool->base64url_decode($_GET['code']); ?>" />
										<div class="row">
											<div class="col-md-12 mb-3">
												<label><strong>Category List</strong></label>
												<?php
													$category = "SELECT * FROM categories WHERE status='0'";
													$category_run = $mysqli -> query($category);
														if($mysqli -> affected_rows > 0 ):
															?>
															
															<select name="category_id" required class="form-control">
																<option> -- Select Category -- </option>";
															
																<?php 
																	foreach ($category_run as $categoryitem) {
																?>
																		<option value="<?= $categoryitem['id'];?>" <?= $categoryitem['id'] == $post['category_id'] ? 'selected':''?>>
																			<?= $categoryitem['name']; ?>
																		</option>
																<?php
															}
															echo"</select>";
														else:
															echo "<h5>No Category Avaliable</h5>";
														endif;
													?>
												</div>

												<div class="col-md-6 mb-3">
													<label><strong>Name</strong></label>
													<input required type="text" id="name" name="name" maxlength="191" class="form-control" value="<?php echo $post['name']; ?>" onblur="suggestSlugName(); suggestMetaTitle('name','meta_title');" />
												</div>
												<div class="col-md-6 mb-3">
													<label><strong>Slug (URL)</strong></label>
													<input required type="text" id="slug" name="slug" maxlength="191" class="form-control" value="<?php echo $post['slug']; ?>" />
												</div>
												<div class="col-md-12 mb-3">
													<label for=""><strong>Small Description</strong></label>
													<textarea required name="small_description" id="small_description" class="form-control" rows="2" cols="30" /><?php echo htmlentities($post['small_description']); ?></textarea>
												</div>
												<div class="col-md-12 mb-3">
													<label><strong>Description</strong></label>
													<textarea required name="description" id="summernote" class="form-control" rows="4" cols="30" /><?php echo htmlentities($post['description']); ?></textarea>
												</div>
												<div class="col-md-12 mb-3">
													<label><strong>Meta Title</strong></label>
													<input required type="text" id="meta_title" name="meta_title" maxlength="191" class="form-control" value="<?php echo $post['meta_title']; ?>"/>
												</div>
												<div class="col-md-6 mb-3">
													<label><strong>Meta Description</strong></label>
													<textarea required name="meta_description" id="meta_description" class="form-control" rows="4" cols="30" /><?php echo $post['meta_description']; ?></textarea>
												</div>
												<div class="col-md-6 mb-3">
													<label><strong>Meta Keyword</strong></label>
													<textarea required name="meta_keyword" id="meta_keyword" class="form-control" rows="4" cols="30" /><?php echo $post['meta_keyword']; ?></textarea>
												</div>

												<div class="col-md-6 mb-3">
													<div class="card mb-6">
														<div class="card-header">
															<i class="bi bi-card-image"></i>
															<strong>Image Viewer</strong>
														</div>

														<div class="card-body">
															<div class="col-md-2 mb-3">
															<input type="hidden" name="old_image" value="<?php echo $post['image']; ?>" />
																<?php
																//Exibe a imagens do Post
																if(!$post['image']):
																	$imagePost = "images/no-image.png";
																else:
																	$imagePost = "posts/" . $post['image'];
																Endif;

																echo "<img src='../libraries/$imagePost' height='120' border='1' alt='' hspace=10 border=1 align='left'>";
															?>
															</div>

															<div class="col-md-10">
																<label><strong>Size image on text <?= $post['image_size']; ?></strong></label>
																<br>
																<input type="radio" id="image_size" name="image_size" <?= $post['image_size'] == 25 ? 'checked':'' ?> value="25">
																<label for="image_size1">&nbsp;25%</label>
																&nbsp;
																<input type="radio" id="image_size" name="image_size" <?= $post['image_size'] == 50 ? 'checked':'' ?> value="50">
																<label for="image_size2">&nbsp;50%</label>
										
																<br>

																<input type="radio" id="image_size" name="image_size" <?= $post['image_size'] == 75 ? 'checked':'' ?> value="75">
																<label for="image_size1">&nbsp;75%</label>
																&nbsp;
																<input type="radio" id="image_size" name="image_size" <?= $post['image_size'] == 100 ? 'checked':'' ?> value="100">
																<label for="image_size2">100%</label>
															</div>
															
															<br/><br/>
															
															<div class="col-md-12 mb-3">
																<label>&nbsp;&nbsp;<strong><strong>Change Image</strong></strong></label>
																<input type="hidden" name="old_image" value="<?php echo $post['image']; ?>" />
																
																<input type="file" id="image" name="image" class="form-control" />
															</div>
														</div>

														<div class="card-footer small text-muted">
															<!-- Updated yesterday at 11:59 PM -->&nbsp;
														</div>
													</div>
												</div>

												<div class="col-md-6 mb-3">
													<div class="card mb-6">
														<div class="card-header">
															<i class="fas fa-table-text"></i>
															<strong>Extra</strong>
														</div>

														<div class="card-body">

															<div class="col-md-6 mb-3">
																<label><strong>Status</strong></label>:&nbsp;&nbsp;&nbsp; 
																	<input type="radio" id="status" name="status" <?= $post['status'] == 0 ? 'checked':'' ?> value="0">
																	<label for="status2"> Visible</label>
																	&nbsp;&nbsp;&nbsp;&nbsp;
																	<input type="radio" id="status" name="status" <?= $post['status'] == 1 ? 'checked':'' ?> value="1">
																	<label for="status1"> Hidden</label>
																
																<br />
																<label for="status1"><strong>Static page:</strong></label>:&nbsp;&nbsp;&nbsp;
																	<input type="radio" id="static_page" name="static_page" <?= $post['static_page'] == 0 ? 'checked':'' ?> value="0">
																	<label for="status2"> No</label>
																	&nbsp;&nbsp;&nbsp;&nbsp;
																	<input type="radio" id="static_page" name="static_page" <?= $post['static_page'] == 1 ? 'checked':'' ?> value="1">
																	<label for="status1"> Yes</label>

																	<br />
																	<label for=""><strong>Language:</strong></label>
																	<select class="form-control" name="language" id="language" >
																		<option value="en" <?= $post['language'] == 'en' ? 'selected':''; ?> >English</option>
																		<option value="it" <?= $post['language'] == 'it' ? 'selected':''; ?> >Italiano</option>
																		<option value="ptbr" <?= $post['language'] == 'ptbr' ? 'selected':''; ?> >Port. do Brazil</option>
																	</select
																	<br/>																	

																	<label><strong>Views: </strong></label>
																	<?php echo $post['views']; ?>
																	<br/><br/>
											
																
																<label><strong>Create at: </strong></label>
																<!-- https://www.php.net/manual/en/datetime.format -->
																<?php 
																//Forat data
																$lang = 'd/m/Y \a\t H:i:s';
																
																$date = date_create($post['created_at']);
																echo date_format($date, $lang);
																?>
																<br /><br />
																<label><strong>Last update: </strong></label>
																<?php 

																$date = date_create($post['last_update']);
																echo date_format($date, $lang); ?>
															</div>
														</div>

														<div class="card-footer small text-muted">
															<!-- Updated yesterday at 11:59 PM -->&nbsp;
														</div>
													</div>
												</div>
												
												<div class="col-md-6 mb-3">
													<input type="reset" class="btn btn-warning" value="&nbsp;&nbsp;Reset&nbsp;&nbsp;">
													&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="Post-view.php" class="btn btn-danger">&nbsp;&nbsp; Back &nbsp;&nbsp;</a>
													<input type="submit" class="btn btn-primary float-end" id="post_update" name="post_update" value="Update Post">
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




<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>