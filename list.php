<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Ciscis</title>
</head>
<body>
	<header>
		<h3>Barang yang terdaftar</h3>
	</header>

	<nav>
		<a href="daftar.php">[+] Tambah Baru</a>
	</nav>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$sql = "SELECT * FROM barang";
		$query = mysqli_query($db, $sql);

		while ($barang = mysqli_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$barang['id']."</td>";
			echo "<td>".$barang['nama']."</td>";
			echo "<td>".$barang['jumlah']."</td>";

			echo "<td>";
			echo "<a href='edit.php?id=".$barang['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$barang['id']."'>Hapus</a>";
			echo "</td>";

			echo "</tr>";
		}
		?>
	</tbody>
	</table>

	<p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>