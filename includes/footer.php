<div class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h2 class="section-heading text-uppercase"><?= $lang['footer_title'];?></h2>
                <h3 class="section-subheading fs-5 text-white fs-5"><?= $lang['footer_sub_title'];?></h3>
                <?php
                if ($lang['footer_sub_title'] or $lang['footer_title']): ?>
                    <div style="height: 4vh"></div>
                <?php endif; ?>
            </div>

            <?php 
            // Se o título e a primeira linha da coluna 2 estiverem false o footer é reconfigurdo para 2 colunas
            if (empty($lang['footer_col2_title']) && empty($lang['footer_col2_line01'])): ?>
                <div class='col-md-2'> </div>
                <div class='col-md-6'>
                <?php                
            else:
                echo"<div class='col-md-4'>";
            endif; 
            ?>           
				<h3 class="text-white"><?= $lang['footer_col1_title'];?></h3>
				<div class="underline"></div>
                <div><a href="<?= base_url($lang['footer_col1_line01_link']); ?>" class="text-white fs-6"><?= $lang['footer_col1_line01'];?></a></div>
                <div><a href="<?= base_url($lang['footer_col1_line02_link']); ?>" class="text-white fs-6"><?= $lang['footer_col1_line02'];?></a></div>
                <div><a href="<?= base_url($lang['footer_col1_line03_link']); ?>" class="text-white fs-6"><?= $lang['footer_col1_line03'];?></a></div>
                <div><a href="<?= base_url($lang['footer_col1_line04_link']); ?>" class="text-white fs-6"><?= $lang['footer_col1_line04'];?></a></div>
            </div>

            <?php 
            // Se o título e a primeira linha da coluna 2 estiverem true o footer é reconfigurdo para 3 colunas
            if (!empty($lang['footer_col2_title']) && !empty($lang['footer_col2_line01'])): ?>

                <div class="col-md-4">
                    <h3 class="text-white"><?= $lang['footer_col2_title'];?></h3>
                    <div class="underline"></div>
                    <div><a href="<?= base_url($lang['footer_col2_line01_link']); ?>" class="text-white fs-6"><?= $lang['footer_col2_line01'];?></a></div>
                    <div><a href="<?= base_url($lang['footer_col2_line02_link']); ?>" class="text-white fs-6"><?= $lang['footer_col2_line02'];?></a></div>
                    <div><a href="<?= base_url($lang['footer_col2_line03_link']); ?>" class="text-white fs-6"><?= $lang['footer_col2_line03'];?></a></div>
                    <div><a href="<?= base_url($lang['footer_col2_line04_link']); ?>" class="text-white fs-6"><?= $lang['footer_col2_line04'];?></a></div>
                </div>
                
            <?php endif; ?>

            <div class="col-md-4">
				<h3 class="text-white"><?= $lang['footer_col3_title'];?></h3>
				<div class="underline"></div>
                <div><a href="<?= $lang['footer_col3_line01_link']; ?>" class="text-white fs-6"><?= $lang['footer_col3_line01'];?></a></div>
                <div><a href="<?= $lang['footer_col3_line02_link']; ?>" class="text-white fs-6"><?= $lang['footer_col3_line02'];?></a></div>
                <div><a href="<?= $lang['footer_col3_line03_link']; ?>" class="text-white fs-6"><?= $lang['footer_col3_line03'];?></a></div>
                <div><a href="<?= $lang['footer_col3_line04_link']; ?>" class="text-white fs-6"><?= $lang['footer_col3_line04'];?></a></div>
            </div>
		</div>
	</div>
</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <footer class="py-4 bg-light mt-auto container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted"><?= $lang['footer_copyrigh'];?> | <a href="<?= base_url($lang['footer_url_link']) ;?>"  style="text-decoration: none;"><?= $lang['footer_url'];?></a></div>
                <div>
                    <a href="<?= base_url('privacy.php'); ?>"><?= $lang['footer_privacy_policy'];?></a>
                    | 
                    <a href="<?= base_url('terms.php'); ?>"><?= $lang['footer_terms_conditions'];?></a>
                </div>
            </div>
        </footer>
    </div>
</nav>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url('assets/js/scripts.js'); ?>"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>