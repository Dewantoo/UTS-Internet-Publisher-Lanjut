<?php  

include("config.php");

if (isset($_POST['daftar'])) {

	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];

	$sql = "INSERT INTO barang (nama,jumlah) VALUE ('$nama', '$jumlah')";

	if ($query) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang.");
}
?>