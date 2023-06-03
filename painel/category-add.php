<?php 
require_once 'authentication.php';
require_once 'includes/header.php';
require_once 'assets/js/scripts.js';
?>

        <div class="container-fluid px-4">
            <h1 class="mt-3">Add Categories</h1>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="category-view.php">Categories</a></li>
                <li class="breadcrumb-item active">Add Category</li>
            </ol>

            <div class="row mt-4">
                <div class="col-md-12">

					<!-- Bloco de message -->
					<?php include 'message.php'; ?>

                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <strong> Add Category</strong>
                        </div>
                        <div class="card-body">

							<form action="code.php" method="POST" class="form-control" />
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for=""><strong>Name</strong></label>
										<input required type="text" id="name" name="name" maxlength="50" class="form-control" onblur="suggestSlugName(); suggestMetaTitle('name','meta_title');" />
									</div>
									<div class="col-md-6 mb-3">
										<label for=""><strong>Slug (URL)</strong></label>
										<input required type="text" id="slug" name="slug" maxlength="50" class="form-control" />
									</div>
									<div class="col-md-12 mb-3">
										<label for=""><strong>Description</strong></label>
										<textarea required name="description" id="description" class="form-control" rows="4" cols="30" /></textarea>
									</div>
									<div class="col-md-12 mb-3">
										<label for=""><strong>Meta Title</strong></label>
										<input required type="text" id="meta_title" name="meta_title" maxlength="50" class="form-control" />
									</div>
									<div class="col-md-6 mb-3">
										<label for=""><strong>Meta Description</strong></label>
										<textarea required name="meta_description" id="meta_description" class="form-control" rows="4" cols="30" /></textarea>
									</div>
									<div class="col-md-6 mb-3">
										<label for=""><strong>Meta Keyword</strong></label>
										<textarea required name="meta_keyword" id="meta_keyword" class="form-control" rows="4" cols="30" /></textarea>
									</div>


									<div class="col-md-2 mb-3">
										<label for=""><strong>Navbar Status</strong></label>
										<br/>
										<input type="radio" id="navbar_status" checked name="navbar_status" value="0">
										<label for="status1"> Actived</label><br>
										<input type="radio" id="navbar_status" name="navbar_status" value="1">
										<label for="status2"> Inactived</label>	
									</div>

									<div class="col-md-2 mb-3">
										<label for=""><strong>Navbar Position</strong></label>
										<input type="text" id="navbar_position" name="navbar_position" class="form-control" placeholder="Display order in the navigation bar" />
									</div>

									<div class="col-md-2 mb-3">
										<label for=""><strong>Status</strong></label>
										<br/>
										<input type="radio" id="status" checked name="status" value="0">
										<label for="status2"> Visible</label><br>
										<input type="radio" id="status"  name="status" value="1">
										<label for="status1"> Hidden</label>
									</div>

									<div class="col-md-2 mb-3">
										<label for=""><strong>Language</strong></label>
										<select class="form-control" name="language" id="language" >
										<option value="" selected>Selection</option> 
										<option value="en">English</option>
										<option value="it">Italiano</option>
										<option value="ptbr">Port. do Brazil</option>
										</select>
									</div>

									<div class="col-md-2 mb-3">
										<label for=""><strong>Icon</strong></label>
										<input type="text" id="icon" name="icon" class="form-control" value="<?= $category['icon'] ?>" placeholder="Exemple: fa-shopping-cart" />	
									</div>

									<hr>
									<div class="col-md-12 mb-3">
										<input type="reset" class="btn btn-warning" value="&nbsp;&nbsp;Reset&nbsp;&nbsp;">
										<a href=""></a>
										&nbsp;&nbsp;&nbsp;
										<a href="category-view.php" class="btn btn-danger">&nbsp;&nbsp; Back &nbsp;&nbsp;</a>

										
										<input type="submit" class="btn btn-primary float-end" id="AddCategory" name="AddCategory" value="Add Category">
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