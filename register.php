<?php 
require_once 'includes/config.php';

$page_title = $lang['register_page_title'];
$meta_description = $lang['register_meta_description'];
$meta_keywords = $lang['register_meta_keywords'];

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
            <li class="breadcrumb-item active"><?= $lang['navbar_register']; ?></li>
        </ol>

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">

                                <!-- Bloco de message -->
                                <?php include 'message.php'; ?>    
                                
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">
                                            <?php echo $lang['register_page_title'];?>
                                        </h3>
                                        <h5 class="section-subheading fs-5 text-center text-muted"><?= $lang['register_page_subtitle'];?></h5>
                                </div>
                                        <div class="card-body">
                                            <form action="register-code.php" method="POST">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input required class="form-control" id="inputFirstName" name="inputFirstName" type="text" placeholder="<?= $lang['register_first_name'];?>" />
                                                            <label for="inputFirstName"><?= $lang['register_first_name'];?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input required class="form-control" id="inputLastName" name="inputLastName" type="text" placeholder="<?= $lang['register_last_name'];?>" onblur="suggestUserName()" />
                                                            <label for="inputLastName"><?= $lang['register_last_name'];?></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-9">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input required class="form-control" id="inputEmail" name="inputEmail" type="email" placeholder="<?= $lang['register_email_address'];?>" />
                                                            <label for="inputEmail">
                                                                <?= $lang['register_email_address'];?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-floating">
                                                            <input required class="form-control" id="inputUserName" name="inputUserName" type="text" placeholder="<?= $lang['register_username'];?>" />
                                                            <label for="inputUsername"><?= $lang['register_username'];?></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input required class="form-control" id="inputPassword" name="inputPassword" type="password" placeholder="<?= $lang['register_password'];?>" />
                                                            <label for="inputPassword"><?= $lang['register_password'];?></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input required class="form-control" id="inputPasswordConfirm" name="inputPasswordConfirm" type="password" placeholder="<?= $lang['register_confirm_password'];?>" />
                                                            <label for="inputPasswordConfirm"><?= $lang['register_confirm_password'];?></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4 mb-0">
                                                    <div class="d-grid"><button class="btn btn-primary btn-block" name="register_btn"><?= $lang['register_button_text'];?></button></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer text-center py-3">
                                            <div class="small"><a href="login.php"><?= $lang['register_footer_link'];?></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div style="height: 8vh"></div>    
        </div>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
