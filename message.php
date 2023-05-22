<?php
if(isset($_SESSION['message'])):
?>
	<!-- Bloco de message -->
	<div class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<?php echo $_SESSION['message']; ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	unset($_SESSION['message']);
endif;
?>