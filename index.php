<?php include 'global_fungsi.php';

// Jika sudah login, arahkan ke dashboard
if (sudah_login()) {
	header("Location: ./dashboard.php");
	die();
}
else {
	// Tambahkan header
	include 'global_header.php';
	?>
	<div class="row">
		<div class="container">
			<?php // Tampilkan informasi jika ada!
			if (isset($_SESSION["informasi"])) {
				echo "<div class='alert alert-info'>".$_SESSION["informasi"]."</div>";
				unset($_SESSION["informasi"]);
			}
			?>

			
					
			</div>
		</div>
	</div>
	<?php 
	// Include footer
	include 'global_footer.php';
}
?>