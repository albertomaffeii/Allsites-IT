<?php
require_once 'includes/config.php';

$page_title = "Home page";
$meta_description = "IT company that offers web systems development services, technical assistance, website hosting and personalized support.";
$meta_keywords = "php, html, css, laravel, mysql, codeigniter, react, js";

require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>
			
<!-- Masthead-->
<header class="masthead">

<!-- Bloco de message -->
<?php require_once ('message.php'); ?>

    <div class="container">
        <div class="masthead-subheading">Welcome To Our Studio!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-xl btn-warning text-uppercase" href="#services">Tell Me More</a>
    </div>
</header>

<!-- Services-->
<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="page-section" id="services">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="section-heading text-uppercase">Services</h2>
                            <h3 class="section-subheading text-muted">All the services offered by Allsites IT.</h3>
                        </div>                        
                        <div class="row text-center">
                        <?php // todos os serviços oferecidos pelo Allsites IT
                        $homeCategory = "SELECT name, slug, description, icon FROM categories WHERE language='" . $_SESSION['language'] . "' AND navbar_status='0' AND status='0' ORDER BY navbar_position, name ASC LIMIT 12";
                        $homeCategory_run = $mysqli -> query($homeCategory);
                        $homeCategory_comp = $mysqli -> affected_rows;

                        if($homeCategory_comp > 0 ):
                                foreach ($homeCategory_run as $homeCateItems) { ?>
                                    <div class="col-md-4">
                                        <span class="fa-stack fa-4x">
                                            <i class="fas fa-circle fa-stack-2x text-warning"></i>
                                            <i class="fas <?= $homeCateItems['icon'];?> fa-stack-1x fa-inverse"></i>
                                        </span>
                                        <h4 class="my-3">
                                            <a class="text-decoration-none link-dark" href="<?= base_url('category/' . $homeCateItems['slug']) ?>">
                                            <?= $homeCateItems['name'];?>
                                            </a>
                                        </h4>
                                        <p class="text-muted"><?= $homeCateItems['description'];?></p>
                                    </div>                        
                                                
                                <?php }
                        endif;	?>
                </section>
				
				<!-- Portfolio Grid-->
				<section class="page-section bg-light" id="portfolio">
					<div class="container">
						<div class="text-center">
							<h2 class="section-heading text-uppercase">Portfolio</h2>
							<h3 class="section-subheading text-muted">Some of the projects developed by our team.</h3>
						</div>
						<div class="row">
							<div class="col-lg-4 col-sm-6 mb-4">
								<!-- Portfolio item 1-->
								<div class="portfolio-item">
									<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
										<div class="portfolio-hover">
											<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
										</div>
										<img class="img-fluid" src="<?= base_url('libraries/images/giometti.jpg'); ?>" alt="..." />
									</a>
									<div class="portfolio-caption">
										<div class="portfolio-caption-heading">Sites with storefronts</div>
										<div class="portfolio-caption-subheading text-muted">WordPress</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mb-4">
								<!-- Portfolio item 2-->
								<div class="portfolio-item">
									<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
										<div class="portfolio-hover">
											<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
										</div>
										
										<img class="img-fluid" src="<?= base_url('libraries/images/giopet.jpg'); ?>" alt="..." />
									</a>
									<div class="portfolio-caption">
										<div class="portfolio-caption-heading">Giopet</div>
										<div class="portfolio-caption-subheading text-muted">Petshop administration system</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mb-4">
								<!-- Portfolio item 3-->
								<div class="portfolio-item">
									<a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
										<div class="portfolio-hover">
											<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
										</div>
										<img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="..." />
									</a>
									<div class="portfolio-caption">
										<div class="portfolio-caption-heading">Finish</div>
										<div class="portfolio-caption-subheading text-muted">Identity</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
        <!-- Blog -->
        <section class="page-section" id="blog">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Blog</h2>
                    <h3 class="section-subheading text-muted">Entertainment, Business and News!</h3>
                </div>
				<ul class="timeline">
					<?php
					// Blog do Allsites IT - A category_id do blog é = 10. Se mudar, tem que alterar a linha abaixo.
					// Para aparecer na página inicial static_page = 1 
					$homeBlog = "SELECT category_id, name, slug, small_description, image, last_update FROM posts 
								WHERE category_id = '10' AND language='" . $_SESSION['language'] . "' AND static_page='1' AND status='0' 
								ORDER BY last_update ASC LIMIT 5";
					$homeBlog_run = $mysqli -> query($homeBlog);
					$homeBlog_comp = $mysqli -> affected_rows;
					if($homeBlog_comp > 0 ):
						foreach ($homeBlog_run as $homeBlogItems) { 
							if ($blogPosition == 0):?>
								<li>
									<div class="timeline-image">
										<img class="rounded-circle img-fluid" src="<?= base_url('libraries/posts/' . $homeBlogItems['image']); ?>" alt="..." />
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="subheading"><?= $homeBlogItems['name'];?></h4>
											<p class="small">Posted on <?= date('d/m/Y', strtotime($homeBlogItems['last_update'])); ?></p>
										</div>
										<div class="timeline-body">
											<p class="text-muted"><?= $homeBlogItems['small_description'];?></p>
										</div>
									</div>
								</li>
								<?php 
								$blogPosition = 1;
							else: 
								$blogPosition = 0;
								?>
								<li class="timeline-inverted">
									<div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="subheading"><?= $homeBlogItems['name'];?></h4>
											<p class="small">Posted on <?= date('d/m/Y', strtotime($homeBlogItems['last_update'])); ?></p>
										</div>
										<div class="timeline-body">
											<p class="text-muted"><?= $homeBlogItems['small_description'];?></p>
										</div>
									<div>
								</li>
							<?php endif; 
						}
					endif;	?>     
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">We are at your disposal.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url('libraries/images/luis.jpg'); ?>" alt="..." />
                            <h4>Luigi Di Mauro</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Luigi di Mauro Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Luigi di Mauro Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Luigi di Mauro LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Stella Maffei</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Stella Maffei Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Stella Maffei Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Stella Maffei LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url('libraries/images/alberto.jpg'); ?>" alt="Alberto Maffei" />
                            <h4>Alberto Maffei</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Alberto Maffei Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Alberto Maffei Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Alberto Maffei LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">An experienced team prepared to meet all the needs of our customers.</p></div>
                </div>
            </div>
        </section>
		
		<!-- Contact-->
        <section class="page-section bg-secondary" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Send a message to us! We are delighted to serve you.</h3>
                </div>
				
                <form id="contactForm" name="contactForm" method="POST" action="<?= base_url('includes/contact.php'); ?>">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name="name" type="text" placeholder="Your Name *" required />
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" type="email" placeholder="Your Email *" required />
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="phone" type="tel" placeholder="Your Phone" />
                            </div>
                        </div>
						<div class="col-md-6">
							<div class="form-group">
								<select class="form-control" name="subject" required>
									<option value="" selected="selected" disabled="disabled"> -- Select an option -- </option>
									<option value="contato">Contact</option>
									<option value="vendas">Sales</option>
									<option value="financeiro">Financial</option>
									<option value="Informações">Information</option>
								</select>
							</div>                            
							<div class="form-group">
                                <!-- Message input-->
                                <textarea class="form-control" name="message" placeholder="Your Message *"  rows="6" cols="30" required></textarea>
                            </div>
                        </div>
                    </div>
					<div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" name="submitButton" value="send" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>

				

            </div>
        </div>
    </div>
</div>


<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>