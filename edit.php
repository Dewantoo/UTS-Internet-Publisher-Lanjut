<?php  
include("config.php");

if ( !isset($_GET['id'])) {
	header('Location: list.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM barang WHERE id=$id";
$query = mysqli_query($db, $sql);
$barang = mysqli_fetch_assoc($query);

if (mysqli_num_row($query) < 1 ){
	die("data tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Ciscis</title>
</head>

<body>
	<header>
		<h3>Data Ciscis</h3>
	</header>

	<form action="edits.php" method="POST">

		<fieldset>
			<input type="hidden" name="id" value="<?php echo $barang['id'] ?>" />
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="Masukkan Nama Barang" value="<?php echo $barang['nama'] ?>" />
		</p>
		<p>
			<label for="jumlah">Jumlah: </label>
			<input type="text" name="jumlah" placeholder="Masukkan Jumlah Barang" value="<?php echo $barang['jumlah'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan"/>
		</p>
		</fieldset>		
	</form>
</body>
</html>