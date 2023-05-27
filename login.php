<?php 
require_once 'includes/config.php';

$page_title = $lang['login_page_title'];
$meta_description = $lang['login_meta_description'];
$meta_keywords = $lang['login_meta_keywords'];

require_once 'includes/header.php'; 

if(isset($_SESSION['auth'])):
	
    if(!isset($_SESSION['message'])):	
        $_SESSION['message'] = $lang['you_are_already_logged_in'];
    endif;
    header("Location: index.php");
    exit(0);

endif;

require_once 'includes/navbar.php';
?>
<div class="py-5 bg-light">
    <div class="container">
        <div style="height: 8vh"></div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="index"><?= $lang['navbar_home']; ?></a></li>
            <li class="breadcrumb-item active"><?= $lang['navbar_login']; ?></li>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><?= $lang['navbar_login']; ?></h3></div>
                                    <div class="card-body">
                                        <form action="login-code.php" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" required name="inputEmail" type="email" placeholder="<?= $lang['login_placeholder_email'];?>" />
                                                <label for="inputEmail"><?= $lang['login_title_email'];?></label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" required name="inputPassword" type="password" placeholder="<?= $lang['login_placeholder_password']; ?>" />
                                                <label for="inputPassword"><?= $lang['login_title_password']; ?></label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" name="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">
                                                    <?= $lang['login_remember_password']; ?></label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small text-decoration-none" href="password.php">
                                                    <?= $lang['login_forgot_password']; ?></a>
                                                <button type="submit" name="login_btn" class="btn btn-primary"><?= $lang['login_button_text']; ?></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div><a class="small text-decoration-none" href="register.php"><?= $lang['login_register_link']; ?></a></div>
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
</div>

<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
?>


