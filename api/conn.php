<?php 

	$conn = new mysqli("localhost", "root", "", "db_alumnii");

	if ($conn) {
			# code...
	}else{			

		echo "Koneksi Gagal";

	}
?>