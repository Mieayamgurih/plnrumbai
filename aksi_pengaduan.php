<?php

include '../config.php';

$nama =$_POST['nama'];
$whatsapp = $_POST['whatsapp'];
$pengaduan = $_POST['pengaduan'];
$alamat = $_POST['alamat'];
$kecamatan = $_POST['kecamatan'];
$nomormeteran = $_POST['nomormeteran'];
$jenisaduan = $_POST['jenisaduan'];


$q = mysqli_query($con, "INSERT INTO pengaduan VALUES
('','$nama','$whatsapp','$pengaduan','$alamat','$kecamatan','$nomormeteran','$jenisaduan')");

if($q){
    echo "<script>window.alert('Sukses dikirim!')
	window.location='pelayanan.php'</script>";
} else {
    echo "<script>window.alert('Failed')
	window.location='pengaduan.php'</script>";
}
?>

?>