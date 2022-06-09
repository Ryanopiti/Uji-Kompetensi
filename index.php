<?php
 //sambnungan singkat koneksi
 require 'fungsi.php';

 //sambungan boostrap
require 'header.php';

 $srt = query("SELECT * FROM data");

  //ketika tombol cari di tekan
  if (isset($_POST["cari"]) ) {
   $srt = cari($_POST["keyword"]);
   } 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin||Daftar Mahasiswa</title>
</head>
<body>
	<br>
	<div class="container">
	<div class="alert alert-success">
		<h1>DAFTAR MAHASISWA</h1>
		<a href="tambah.php" class="btn btn-success">Tambah Data Mahasiswa</a>
	</div>
	<table class = "table bg-white">
		<form action="" method="post">
			<input type="text" name="keyword" size="40" placeholder="Pencarian...." autocomplete autofocus>
			<button type="submit" name="cari">Cari</button>
		</form>
		<thead class="thead-dark">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Jurusan</th>
			<th>Tanggal Lahir</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<?php $i=1; ?>

		<?php foreach ($srt as $row) :?>

		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row["nama"]; ?></td>
			<td><?php echo $row["nim"]; ?></td>
			<td><?php echo $row["jurusan"]; ?></td>
			<td><?php echo $row["tanglah"]; ?></td>
			<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["alamat"]; ?></td>
			<td><a href="ubah.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Edit</a></td>
			
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
	</table>
	</div>
	
</body>
</html>