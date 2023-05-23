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
                <li class="nav-item"><a class="nav-link" href="<?= base_url('index');?>#services"><?= $lang['services']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('index');?>#portfolio"><?= $lang['portfolio']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('index');?>#blog"><?= $lang['blog']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('index');?>#team"><?= $lang['team']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('index');?>#contact"><?= $lang['contact']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('login');?>"><?= $lang['login']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('register');?>"><?= $lang['register']; ?></a></li>
				<li class="nav-item">
					<form method="get" name="languageForm" id="languageForm" action="index">
						<select class="nav-item bg-dark text-white" name="lang" id="lang" onChange="document.getElementById('languageForm').submit();" >
							<option value="en" <?= $_SESSION['lang'] == 'en' ? 'selected':''; ?> >EN</option>
							<option value="it" <?= $_SESSION['lang'] == 'it' ? 'selected':''; ?> >IT</option>
							<option value="ptbr" <?= $_SESSION['lang'] == 'ptbr' ? 'selected':''; ?> >PT</option>
						</select>
					</form>
				</li>
            </ul>
        </div>
    </div>
</nav>