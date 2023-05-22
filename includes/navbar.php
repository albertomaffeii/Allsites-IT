<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav"> <!-- navbar-dark -->
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('index'); ?>"><img src="<?= base_url('libraries/images/logo.jpeg'); ?>" height='80' alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu <span id="#page-top"></span>
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('login'); ?>">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('register'); ?>">Register</a></li>
				<li class="nav-item">
					<form method="post" name="languageForm" id="languageForm" action="index">
						<select class="nav-item bg-dark text-white" name="language" id="language" onChange="document.getElementById('languageForm').submit();" >
							<option value="en" <?= $_SESSION['language'] == 'en' ? 'selected':''; ?> >EN</option>
							<option value="it" <?= $_SESSION['language'] == 'it' ? 'selected':''; ?> >IT</option>
							<option value="ptbr" <?= $_SESSION['language'] == 'ptbr' ? 'selected':''; ?> >PT</option>
						</select>
					</form>
				</li>
            </ul>
        </div>
    </div>
</nav>