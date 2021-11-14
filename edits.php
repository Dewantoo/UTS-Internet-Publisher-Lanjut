<?php  
include("config.php");

if (isset($_POST['simpan'])){

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];

	$sql = "UPDATE barang SET nama='$nama', jumlah='$jumlah' WHERE id=$id";
	$query = mysqli_query($db, $sql);

	if ($query) {
		header('Location: list.php');
	} else {
		die("Gagal menyimpan perubahan.");
	}
	
} else {
	die("Akses dilarang.");
}
?>