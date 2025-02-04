<?php 
include '../../config/koneksi.php';
$id_kendaraan = $_POST['id_kendaraan'];
$id_parkir = $_POST['id_parkir'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];

$query = mysqli_query($coon,"INSERT INTO kendaraan VALUES('$id_kendaraan','$id_parkir','$jenis_kendaraan')
");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>