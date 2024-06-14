<?php

include '../config.php';

$nama = $_POST['nama'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$alamat = $_POST['alamat'];

$q = mysqli_query($con, "UPDATE migrasi SET 
             nama_lokasi, latitude, longitude, alamat) VALUES ('$nama', '$latitude', '$longitude', '$alamat')
'");

if ($q) {
    echo "<script>window.alert('Success!');
	window.location='migrasi.php'</script>";
} else {
    echo "<script>window.alert('Failed!');
	window.location='edit_migrasi.php'</script>";
}

?>