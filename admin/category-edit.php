<?php 
require_once 'authentication.php';
require_once 'includes/header.php';
require_once 'assets/js/scripts.js';
?>

        <div class="container-fluid px-4">
            <h1 class="mt-5">Edit Categories</h1>

            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="category-view.php">Categories</a></li>
                <li class="breadcrumb-item active">Edit Categories</li>
            </ol>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <strong> Edit Category</strong>
                        </div>
                        <div class="card-body">

							<?php
							// Busca category pelo id
							if(isset($_GET['code'])):

								$categories_run = $mysqli -> query("SELECT * FROM categories where id='" . $tool->base64url_decode($_GET['code']) . "'");

								if($mysqli -> affected_rows > 0):
									
									foreach ($categories_run as $category) {
										?>
										<form action="code.php" method="POST" class="form-control" />
											<input type="hidden" id="category_id" name="category_id" value="<?=$tool->base64url_decode($_GET['code']); ?>" />
											<div class="row">
												<div class="col-md-6 mb-3">
													<label for=""><strong>Name</strong></label>
													<input required type="text" id="name" name="name" class="form-control" value="<?php echo $category['name']; ?>" onblur="suggestSlugName(); suggestMetaTitle('name','meta_title');" />
												</div>
												<div class="col-md-6 mb-3">
													<label for=""><strong>Slug (URL)</strong></label>
													<input required type="text" id="slug" name="slug" class="form-control" value="<?php echo $category['slug']; ?>" />
												</div>
												<div class="col-md-12 mb-3">
													<label for=""><strong>Description</strong></label>
													<textarea required name="description" id="description" class="form-control" rows="4" cols="30" /><?php echo $category['description']; ?></textarea>
												</div>
												<div class="col-md-12 mb-3">
													<label for=""><strong>Meta Title</strong></label>
													<input required type="text" id="meta_title" name="meta_title" max="30" class="form-control" value="<?php echo $category['meta_title']; ?>"/>
												</div>
												<div class="col-md-6 mb-3">
													<label for=""><strong>Meta Description</strong></label>
													<textarea required name="meta_description" id="meta_description" class="form-control" rows="4" cols="30" /><?php echo $category['meta_description']; ?></textarea>
												</div>
												<div class="col-md-6 mb-3">
													<label for=""><strong>Meta Keyword</strong></label>
													<textarea required name="meta_keyword" id="meta_keyword" class="form-control" rows="4" cols="30" /><?php echo $category['meta_keyword']; ?></textarea>
												</div>
												<div class="col-md-2 mb-2">
													<label for=""><strong>Navbar Status</strong></label>
													<br/>
													<input type="radio" id="navbar_status" checked name="navbar_status" <?=$category['navbar_status'] == 0 ? 'checked':'' ?> value="0">
													<label for="status1"> Actived</label><br>
													<input type="radio" id="navbar_status" name="navbar_status" <?= $category['navbar_status'] == 1 ? 'checked':'' ?> value="1">
													<label for="status2"> Inactived</label>	
												</div>

												<div class="col-md-2 mb-3">
													<label for=""><strong>Navbar Position</strong></label>
													<input type="text" id="navbar_position" name="navbar_position" class="form-control" value="<?= $category['navbar_position'] ?>" placeholder="Display order in the navigation bar" />	
												</div>

												<div class="col-md-2 mb-3">
													<label for=""><strong>Status</strong></label>
													<br/>
													<input type="radio" id="status" name="status" <?= $category['status'] == 0 ? 'checked':'' ?> value="0">
													<label for="status2"> Visible</label><br>
													<input type="radio" id="status" name="status" <?= $category['status'] == 1 ? 'checked':'' ?> value="1">
													<label for="status1"> Hidden</label>													
												</div>

												<div class="col-md-2 mb-3">
													<label for=""><strong>Language</strong></label>
													<select class="form-control" name="language" id="language" >
													<option value="en" <?= $category['language'] == 'en' ? 'selected':''; ?> >English</option>
													<option value="it" <?= $category['language'] == 'it' ? 'selected':''; ?> >Italiano</option>
													<option value="ptbr" <?= $category['language'] == 'ptbr' ? 'selected':''; ?> >Port. do Brazil</option>
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
													&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="category-view.php" class="btn btn-danger">&nbsp;&nbsp; Back &nbsp;&nbsp;</a>

													
													<input type="submit" class="btn btn-primary float-end" id="category_update" name="category_update" value="Update Category">
												</div>
											</div>
										</form>
									<?php 
											
								} 
						
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