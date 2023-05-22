<?php
require_once 'includes/config.php';

if(isset($_GET['title'])):

	$slug = $mysqli -> real_escape_string($_GET['title']);

	$posts = "SELECT slug, meta_title, meta_description, meta_keyword FROM posts WHERE slug='$slug' LIMIT 1";
	$posts_run = $mysqli -> query($posts);						
	if($mysqli -> affected_rows > 0):

		$metaPostItem = $posts_run -> fetch_array(MYSQLI_ASSOC);
		$page_title = $metaPostItem['meta_title'];
		$meta_description = $metaPostItem['meta_description'];
		$meta_keywords = $metaPostItem['meta_keyword'];

	else:

		$page_title = "Posts page";
		$meta_description = "IT company that offers web systems development services, technical assistance, website hosting and personalized support.";
		$meta_keywords = "php, html, css, laravel, mysql, codeigniter, react, js";

	endif;

endif;

require_once 'includes/header.php';
require_once 'includes/navbar.php';

if (!isset($_SESSION['tempoView'])):
	$_SESSION['tempoView'] = NULL;
endif;

?>

<div class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
				
				<?php 
				include('message.php'); 

				if(isset($_GET['title'])):

					$slug = $mysqli -> real_escape_string($_GET['title']);

						$posts = "SELECT * FROM posts WHERE slug='$slug'";
						$posts_run = $mysqli -> query($posts);						
						if($mysqli -> affected_rows > 0):

							foreach($posts_run as $postItems) {
								
								//Salva 1 view para esta página
								if($_SESSION['tempoView'] <= date('h:i:s')):
									$post_query_view_run = "UPDATE posts SET `views` = '" . $postItems['views'] + 1 . "' WHERE id = '" . $postItems['id'] . "'";
									$mysqli -> query($post_query_view_run);
									
									// Soma 1 Minutos
									$now = date('H:i:s', strtotime('+30 seconds', strtotime(date('h:i:s'))));
									$_SESSION['tempoView'] = $now ;
								endif;
								?>

								<div class="card shadow-sm mb-4">
									<div class="card-header">
										<h5><?= $postItems['name']; ?></h5>
									</div>

									<div class="card-body">
										<label class="text-dark me-2"> 
											<font size="2px">
												Posted on <?= date('d/m/Y', strtotime($postItems['created_at'])); ?> - Last updated on <?= date('d/m/Y', strtotime($postItems['last_update'])); ?> - Views <?= $postItems['views']; ?> 
											</font>
										</label>
										<hr>
										<?php if($postItems['image'] != null): ?>
											<img src="<?= base_url('libraries/posts/' . $postItems['image']); ?>" class="w-<?= $postItems['image_size']; ?>" alt="<?= $postItems['name']; ?>" hspace="10" align="left"?>
										<?php endif; ?>
									<div>
									<?= $postItems['description']; ?>
								</div>
							</div>					
						</div>

					<?php
					}


						else:

							echo "<h4>No such Post found.</h4>";

						endif;
				else:

						echo "<h4>No such Category found.</h4>";

					endif;

				
				?>
            </div>

			<div class="col-md-3">
				<div class="card">
					<div class="card-header">
						<h5>Advertise Area</h5>
					</div>
					<div class="card-box">
						<center>Your advertise</center>
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