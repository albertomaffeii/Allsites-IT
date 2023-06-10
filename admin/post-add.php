<?php 
require_once 'authentication.php';
require_once 'includes/header.php';
require_once 'assets/js/scripts.js';
?>

        <div class="container-fluid px-4">
            <h1 class="mt-3">Add Post</h1>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="post-view.php">Posts</a></li>
                <li class="breadcrumb-item active">Add Post</li>
            </ol>

            <div class="row mt-4">
                <div class="col-md-12">

					<!-- Bloco de message -->
					<?php include 'message.php'; ?>

                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <strong> Add Post</strong>
                        </div>
                        <div class="card-body">

							<form action="code.php" method="POST" class="form-control" enctype="multipart/form-data" />
								<div class="row">
									<div class="col-md-12 mb-3">
										<label for=""><strong>Category List*</strong></label>
										<?php
											$categoryList = "SELECT * FROM categories WHERE status='0'";
											$categoryList_run = $mysqli -> query($categoryList);
											if($mysqli -> affected_rows > 0 ):
											
												echo"<select name='category_id' required class='form-control'>
													<option> -- Select Category -- </option>";
												foreach ($categoryList_run as $categoryItem ) {
													echo"<option value=" . $categoryItem['id'] . " >" . $categoryItem['name'] . "</option>";
												}

												echo"</select>";
											
											else:

												echo "<h5>No Category Avaliable</h5>";

											endif;
												
										?>
									</div>
									
									<div class="col-md-6 mb-3">
										<label for=""><strong>Name*</strong></label>
										<input required type="text" id="name" name="name" maxlength="191" class="form-control" onblur="suggestSlugName(); suggestMetaTitle('name','meta_title');" />
									</div>
									
									<div class="col-md-6 mb-3">
										<label for=""><strong>Slug (URL)*</strong></label>
										<input required type="text" id="slug" name="slug" maxlength="191" class="form-control" />
									</div>
									<div class="col-md-12 mb-3">
										<label for=""><strong>Small Description*</strong></label>
										<textarea required name="small_description" id="small_description" class="form-control" rows="2" cols="30" /></textarea>
									</div>
									<div class="col-md-12 mb-3">
										<label for=""><strong>Description*</strong></label>
										<textarea required name="description" id="summernote" class="form-control" rows="6" cols="30" /></textarea>
									</div>

									<div class="col-md-12 mb-3">
										<label for=""><strong>Meta Title*</strong></label>
										<input required type="text" id="meta_title" name="meta_title" maxlength="191" class="form-control" />
									</div>
									<div class="col-md-6 mb-3">
										<label for=""><strong>Meta Description*</strong></label>
										<textarea required name="meta_description" id="meta_description" class="form-control" rows="4" cols="30" /></textarea>
									</div>
									<div class="col-md-6 mb-3">
										<label for=""><strong>Meta Keyword*</strong></label>
										<textarea required name="meta_keyword" id="meta_keyword" class="form-control" rows="4" cols="30" /></textarea>
									</div>

									<div class="col-md-12-md-3">
										<div class="card">
											<div class="card-header">
												<h5>Image Area</h5>
											</div>
											<div class="card-box-fluid px-2">
												<div class="row mt-2">
													<div class="col-md-6 mb-3">
														<label for=""><strong>Select a image</strong></label>
														<input type="file" id="image" name="image" class="form-control" />
													</div>

													<div class="col-md-6 mb-3">
														<label><strong>Size image on text </strong></label><br>
														<input type="radio" id="image_size" name="image_size" value="25">
														<label for="image_size1">&nbsp;25%</label>
														&nbsp;
														<input type="radio" id="image_size" name="image_size" value="50">
														<label for="image_size2">&nbsp;50%</label>
														&nbsp;
														<input type="radio" id="image_size" name="image_size" value="75">
														<label for="image_size3">&nbsp;75%</label>
														&nbsp;
														<input type="radio" id="image_size" name="image_size" value="100" checked >
														<label for="image_size4">100%</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<p></p>
									<div class="col-md-2 mb-3">
										<label for=""><strong>Status*</strong></label>
										<br/>
										<input type="radio" id="status" checked name="status" value="0">
										<label for="status2"> Visible</label><br />
										<input type="radio" id="status" name="status" value="1">
										<label for="status1"> Hidden</label>
										
									</div>

									<div class="col-md-2 mb-3">
										<label for="status1"><strong>Static page*</strong></label>
										<br />
										<input type="radio" id="static_page" name="static_page" checked value="0">
										<label for="status2"> No</label><br/ >
										<input type="radio" id="static_page" name="static_page" value="1">
										<label for="status1"> Yes</label>
									</div>
									<div class="col-md-2 mb-3">
										<label for=""><strong>Language*</strong></label>
										<select class="form-control" name="language" id="language" required >
										<option value="" selected>Selection</option> 
										<option value="en">English</option>
										<option value="it">Italiano</option>
										<option value="ptbr">Port. do Brazil</option>
										</select>
									</div>
									
									<div class="col-md-6 mb-3">										
										<input type="reset" class="btn btn-warning" value="&nbsp;&nbsp;Reset&nbsp;&nbsp;">
										<a href=""></a>
										&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="post-view.php" class="btn btn-danger">&nbsp;&nbsp; Back &nbsp;&nbsp;</a>
										
										<input type="submit" class="btn btn-primary float-end" id="post_add" name="post_add" value="Save Post">
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