<?php
    require_once "../dbconnect.php";
    if(isset($_GET['gambar'])) {
        $sql = "SELECT gambar FROM sstock_brg WHERE gambar=" . $_GET['gambar'];
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		// header("Content-type: " . $row["imageType"]);
        echo $row["gambar"];
	}
	mysqli_close($conn);
?>