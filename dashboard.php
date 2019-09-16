<?php include 'global_fungsi.php';

// Jika sudah login, arahkan ke dashboard
if (sudah_login()) {
	// Tambahkan header
	include 'global_header.php';
	?>
	<div class="container">
		<div class="row">
			<?php // Tampilkan informasi jika ada!
			if (isset($_SESSION["informasi"])) {
				echo "<div class='alert alert-info'>".$_SESSION["informasi"]."</div>";
				unset($_SESSION["informasi"]);
			}
			?>

		
								<!-- Chart JS -->
								<script type="text/javascript" src="./assets/js/vendor/chartjs/Chart.min.js"></script>
								<script type="text/javascript">
									// For a pie chart
									var options = [
									    {
									        value: <?php echo $n_anggota_laki; ?>,
									        color:"#F7464A",
									        highlight: "#FF5A5E",
									        label: "Laki-laki"
									    },
									    {
									        value: <?php echo $n_anggota_perempuan; ?>,
									        color: "#46BFBD",
									        highlight: "#5AD3D1",
									        label: "Perempuan"
									    }
									]
									window.onload = function(){
										var ctx      = document.getElementById("canvas_chart").getContext("2d");
										window.myPie = new Chart(ctx).Pie(options, {
										    animateScale: true

										});
									};
								</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
else {
	header("Location: ./login.php");
	die();
}

?>