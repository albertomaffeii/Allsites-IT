<?php
require_once 'includes/config.php';

if(isset($_GET['title'])):

	$slug = $mysqli -> real_escape_string($_GET['title']);

	$category = "SELECT id, slug, meta_title, meta_description, meta_keyword FROM categories WHERE slug='$slug' AND status='0' LIMIT 1";
	$category_run = $mysqli -> query($category);

	if($mysqli -> affected_rows > 0):

		$categoryItem = $category_run -> fetch_array(MYSQLI_ASSOC);
		$page_title = $categoryItem['meta_title'];
		$meta_description = $categoryItem['meta_description'];
		$meta_keywords = $categoryItem['meta_keyword'];

	else:

		$page_title = "Category page";
		$meta_description = "IT company that offers web systems development services, technical assistance, website hosting and personalized support.";
		$meta_keywords = "php, html, css, laravel, mysql, codeigniter, react, js";

	endif;
else:

	$page_title = "Category page";
	$meta_description = "IT company that offers web systems development services, technical assistance, website hosting and personalized support.";
	$meta_keywords = "php, html, css, laravel, mysql, codeigniter, react, js";

endif;

require_once 'includes/header.php';
require_once 'includes/navbar.php';
require_once 'admin/classes/tools.php';
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">				
				<?php 
				include('message.php'); 

				if(isset($_GET['title'])):

					$slug = $mysqli -> real_escape_string($_GET['title']);
					$category = "SELECT id, slug FROM categories WHERE slug='$slug' AND status='0' LIMIT 1";
					$category_run = $mysqli -> query($category);
					if($mysqli -> affected_rows > 0):
						
						$categoryItem = $category_run -> fetch_array(MYSQLI_ASSOC);
						$category_id = $categoryItem['id'];

						$posts = "SELECT * FROM posts WHERE category_id='$category_id' AND status='0' ORDER BY created_at DESC";
						$posts_run = $mysqli -> query($posts);						
						if($mysqli -> affected_rows > 0):
							foreach($posts_run as $postItems) {

								if($postItems['static_page'] == 0):								
									?>
									<a href="<?= base_url('post/'. $postItems['slug']); ?>" class="text-decoration-none">
										<div id="" class="card card-body shadow-sm mb-4">
											<h5><?= $postItems['name']; ?></h5>
											<div>
												<label class="text-dark me-2"> <font size="2px">Posted on <?= date('d/m/Y', strtotime($postItems['created_at'])); ?> - Last updated on <?= date('d/m/Y', strtotime($postItems['last_update'])); ?></font></label>							
											</div>					
										</div>
									</a>
									<?php
								else:
									echo '<script> location.replace("' . base_url('page/'. $postItems['slug']) . '"); </script>';
									exit(0);
								endif;

							}

						else:
							echo "<h4>No such Post found.</h4>";
						endif;
					else:
						echo "<h4>No such Category found.</h4>";
					endif;
				else:
					echo "<h4>No such URL found.</h4>";
				endif;				
				?>
            </div>

			<div class="col-md-3">
				<div class="card">
					<div class="card-header">
						<h5>Advertise Area</h5>
					</div>
					<div class="card-box">
						Your advertise
					</div>
				</div>
			</div>
        </div>
    </div>
    
    
</div>



<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>