<?php 
//sambungan ke database
$conn = mysqli_connect("localhost","root","","mahasiswa");

// query
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$kotak = [];
	while ($row = mysqli_fetch_assoc($result) ) {
	 	$kotak[] = $row;
	 } 
	 return $kotak;
}

// tambah
function tambah($data) {
	global $conn;
	// ambil data pada setiap elemen form
	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$tanglah = htmlspecialchars($data["tanglah"]);
	$email = htmlspecialchars($data["email"]);
	$alamat = htmlspecialchars($data["alamat"]);


	// query tambah data
	$query = "INSERT INTO data VALUES ('', '$nama', '$nim', '$jurusan', '$tanglah', '$email', '$alamat')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
} 

// cari
function cari($keyword) {
	$query = "SELECT * FROM data WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";
	return query($query);
}

// hapus
function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM data WHERE id = $id");
	return mysqli_affected_rows($conn);

}

// ubah
function ubah($data) {
	global $conn;

	// ambil data pada setiap elemen form
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$tanglah = htmlspecialchars($data["tanglah"]);
	$email = htmlspecialchars($data["email"]);
	$alamat = htmlspecialchars($data["alamat"]);


	// query ubah data
	$query = "UPDATE data SET nama = '$nama', nim='$nim', jurusan='$jurusan', tanglah='$tanglah', email='$email', alamat='$alamat' WHERE id = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
 ?>