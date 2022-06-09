<?php 
require 'header.php';
require 'fungsi.php';
// apakah tobol submit sudah di tekan atau belum
if (isset($_POST["submit"]) ) {
	

	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST) > 0) {
		echo "<script>alert('Data gagal ditambahkan'); document.location.href = 'index.php';</script>";

	}else{
		echo "<script>alert('Data berhasil ditambahkan'); document.location.href = 'index.php';</script>";

	}
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<br>
	<br>
	<br>
	<div class="container">
	<h2 class="alert alert-success text-center">Tambah data Mahasiswa</h2>
	<form action="" method="post" enctype="multipart/form-data">
		
			<div class="form-group">
					<label for="nosurat" class="font-weight-bold">Nama :</label>
					<input type="text" name="nama" id="nosurat" required class="form-control">
				</div>

			<div class="form-group">
				<label for="talsur" class="font-weight-bold">NIM :</label>
				<input type="text" name="nim" id="talsur" required class="form-control">
				</div>

			<div class="form-group">
				<label for="talsudi" class="font-weight-bold">Jurusan :</label>
				<input type="text" name="jurusan" id="talsudi" required class="form-control">
			</div>

			<div class="form-group">
				<label for="asalsu" class="font-weight-bold">Tanggal Lahir :</label>
				<input type="date" name="tanglah" id="asalsu" required class="form-control">
			</div>

			<div class="form-group">
				<label for="asalsu" class="font-weight-bold">Email :</label>
				<input type="text" name="email" id="asalsu" required class="form-control">
			</div>

			<div class="form-group">
				<label for="perihal" class="font-weight-bold">Alamat :</label>
				<br>
				<input name="alamat" id="perihal" cols="30" rows="10" class="form-control"></input>
			</div>
			

			<button type="submit" name="submit" class="btn btn-success">Kirim</button>
			<a href="index.php" class="btn btn-primary">Kembali</a>
		
	</form>
	</div>
	
</body>
</html>