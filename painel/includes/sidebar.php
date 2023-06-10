<div id="layoutSidenav_nav">
	<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>
    
    <nav class="sb-sidenav accordion sb-sidenav-dark bg-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>

                <a class="nav-link <?= $page == 'index.php' ? 'active':''; ?>" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link <?= $page == 'register-edit.php' ? 'active':''; ?>" href="register-edit.php?code=<?php echo $tool->base64url_encode($_SESSION['auth_user']['user_id']); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    My User
                </a>
                <a class="nav-link <?= $page == 'customer-edit.php' ? 'active':''; ?>" href="customer-edit.php?code=<?php echo $tool->base64url_encode($_SESSION['auth_user']['user_id']); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    My Data
                </a>

				<div class="sb-sidenav-menu-heading">Additional services</div>

				<a class="nav-link collapsed <?= $page == 'category-add.php' || $page == 'category-view.php' || $page == 'category-edit.php' ? 'active':''; ?>" href="category-add.php"" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Add Services
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?= $page == 'email-add.php' || $page == 'disk-add.php' || $page == 'certificate-add.php' || $page == 'sql-add.php' || $page == 'mapping-add.php' || $page == 'cronjob-add.php' ? 'show':''; ?>" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link <?= $page == 'email-add.php' ? 'active':''; ?>" href="email-add.php">New domais hosting</a>
                    <a class="nav-link <?= $page == 'email-add.php' ? 'active':''; ?>" href="email-add.php">Extra Email Space</a>
                        <a class="nav-link <?= $page == 'disk-add.php' || $page == 'category-edit.php' ? 'active':''; ?>" href="disk-add.php">Extra Disk Space</a>
                        <a class="nav-link <?= $page == 'certificate-add' || $page == 'category-edit.php' ? 'active':''; ?>" href="certificate-add.php">SSL Certificate</a>
                        <a class="nav-link <?= $page == 'sql-add.php' || $page == 'category-edit.php' ? 'active':''; ?>" href="sql-add.php">SQL Server</a>
                        <a class="nav-link <?= $page == 'mapping-add.php' || $page == 'category-edit.php' ? 'active':''; ?>" href="mapping-add.php">Mapping</a>
                        <a class="nav-link <?= $page == 'cronjob-add.php' || $page == 'category-edit.php' ? 'active':''; ?>" href="cronjob-add.php">Cronjob</a>
                    </nav>
                </div>

                <a class="nav-link collapsed <?= $page == 'post-add.php' || $page == 'post-view.php' || $page == 'post-edit.php' ? 'active':''; ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePosts" aria-labelledby="Posts" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?= $page == 'post-add.php' ? 'active':''; ?>" href="post-add.php">Add Post</a>
                        <a class="nav-link<?= $page == 'post-view.php' || $page == 'post-edit.php' ? 'active':''; ?>" href="post-view.php">View Posts</a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.php">Login</a>
                                <a class="nav-link" href="register.php">Register</a>
                                <a class="nav-link" href="password.php">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.php">401 Page</a>
                                <a class="nav-link" href="404.php">404 Page</a>
                                <a class="nav-link" href="500.php">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                
                
                <a class="nav-link" href="support-and-help.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Support & Help
                </a>                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as <?php echo $_SESSION["auth_user"]['user_name']; ?></div>
            
        </div>
    </nav>
</div>