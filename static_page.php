<?php
require_once 'includes/config.php';

if(isset($_GET['title'])):

	$slug = $mysqli -> real_escape_string($_GET['title']);

	$posts = "SELECT slug, name, meta_title, meta_description, meta_keyword FROM posts WHERE slug='$slug' LIMIT 1";
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
?>
<div class="py-5 bg-light">
    <div class="container">
        <div style="height: 8vh"></div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="index"><?= $lang['navbar_home']; ?></a></li>
            <li class="breadcrumb-item active"><?= $metaPostItem['name'];; ?></li>
        </ol>

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
							
							// Saves 1 view for this page
							if($_SESSION['tempoView'] <= date('h:i:s')):
								$post_query_view_run = "UPDATE posts SET `views` = '" . $postItems['views'] + 1 . "' WHERE id = '" . $postItems['id'] . "'";
								$mysqli -> query($post_query_view_run);
								
								// Soma 1 Minutos
								$now = date('H:i:s', strtotime('+30 seconds', strtotime(date('h:i:s'))));
								$_SESSION['tempoView'] = $now ;
							endif;	?>

							<div class="card">
								<div class="card-header">
									<h5><strong><?= $postItems['name']; ?></strong></h5>
								</div>
								<div class="card-body">
									<div class="card-box">
										<div class="shadow-sm mb-4">
											<div>
												<?php if($postItems['image'] != null): ?>

													<img src="<?= base_url('libraries/posts/' . $postItems['image']); ?>" class="w-<?= $postItems['image_size']; ?>" alt="<?= $postItems['name']; ?>" hspace="<?= $postItems['image_size']=='100' ? '0' : '10'; ?>" vspace="<?= $postItems['image_size']=='100' ? '20' : '0'; ?>" align="left"?>
													<?= $postItems['description'];

												endif; ?>
											</div>
										</div>														
									</div>
								</div>
							</div>
						<?php }

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
					<div class="card-body">
						<div class="card-box">Your advertise</div>
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