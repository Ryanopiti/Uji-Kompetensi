<?php 
// sambungan ke database
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
	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$level = htmlspecialchars($data["level"]);
	// query tambah data
	$query = "INSERT INTO user VALUES ('', '$nama', '$username', '$password', '$level')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// hapus
function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM user WHERE id = $id");
	return mysqli_affected_rows($conn);

}

// ubah
function ubah($data) {
	global $conn;

	// ambil data pada setiap elemen form
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$level = htmlspecialchars($data["level"]);
	// query ubah data
	$query = "UPDATE user SET nama = '$nama', username='$username', password='$password', level='$level' WHERE id = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

// cari
function cari($keyword) {
	$query = "SELECT * FROM user WHERE nama LIKE '%$keyword%' OR username LIKE '%$keyword%' OR level LIKE '%$keyword%'";
	return query($query);
}


 ?>
