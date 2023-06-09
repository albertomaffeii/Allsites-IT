<?php
session_start();

require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<div class="container">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Password Recovery</li>
    </ol>

<div id="layoutAuthentication">
	<div id="layoutAuthentication_content">
		<main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
                                            <div class="card-body">
                                                <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>
                                                <form>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                        <label for="inputEmail">Email address</label>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                        <a class="small" href="login.php">Return to login</a>
                                                        <a class="btn btn-primary" href="login.php">Reset Password</a>
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
                </div>
            </main>
        </div>
    </div>
    <div style="height: 10vh"></div>    
</div>


<?php
require_once 'includes/footer.php';
//require_once 'includes/navbar.php';
?>
