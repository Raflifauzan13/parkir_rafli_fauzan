<?php 
include '../../config/koneksi.php';
$id_parkir = $_POST['id_parkir'];
$alamat = $_POST['alamat'];
$harga = $_POST['harga'];

$query = mysqli_query($coon,"INSERT INTO parkir VALUES('$id_parkir','$alamat','$harga')
");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>