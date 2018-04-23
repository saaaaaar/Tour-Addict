<?php
include "conf/koneksi.php";
 
$x = $_POST['x'];
$y = $_POST['y'];
$judul = $_POST['judul'];
$des = $_POST['des'];
$gambar = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$tipe = $_POST['jenis'];
$id_user = $_POST['id_user'];

$gambarbaru = date('dmYHis').$gambar;

$path = "foto/".$gambarbaru;
if(move_uploaded_file($tmp, $path)){
	$sql = "INSERT INTO ajuan VALUES('','$judul','$des','$gambarbaru','$x','$y','$tipe',0,'$id_user')";
		$hasil = $koneksi->query($sql);
		if ($hasil != TRUE) {
			echo"<script>alert('Data tidak berhasil disimpan !');</script>"; 
		}else{
			echo"<script>alert('Data berhasil di kirimkan !');</script>";
		}
		header('Location: login-page.php');
	$koneksi->close();
}
else{
	echo"<script>alert('gambar gagal disimpan');</script>";
}

?>