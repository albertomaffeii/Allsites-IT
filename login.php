<?php 
require_once 'includes/config.php';

$page_title = "Login page";
$meta_description = "Login to access the Allsites IT Dashboard";
$meta_keywords = "php, html, css, laravel, mysql, codeigniter, react, js";

require_once 'includes/header.php'; 

if(isset($_SESSION['auth'])):
	
    if(!isset($_SESSION['message'])):	
        $_SESSION['message'] = "You are already logged In";
    endif;
    header("Location: index.php");
    exit(0);

endif;

require_once 'includes/navbar.php';
?>

<div class="container">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Login</li>
    </ol>

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">

						<!-- Bloco de message -->
                        <?php include 'message.php'; ?>

                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                <div class="card-body">
                                    <form action="login-code.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" required name="inputEmail" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">E-mail address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" required name="inputPassword" type="password" placeholder="Enter Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" name="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.php">Forgot Password?</a>
                                            <button type="submit" name="login_btn" class="btn btn-primary">Login Now</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div style="height: 10vh"></div>    
</div>

<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>


