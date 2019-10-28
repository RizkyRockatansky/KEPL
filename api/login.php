<?php  
	include 'conn.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$q = "SELECT * FROM aluni_v_pengguna WHERE username='".$username."'and password='".$password."'";

	$query = mysqli_query($conn, $q);

	$result = array();

	while ($fetchData = $query->fetch_assoc()) {
		$result[] = $fetchData;
	}

	echo json_encode($result);
?>