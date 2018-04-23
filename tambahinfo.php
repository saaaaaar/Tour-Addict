<?php
include "conf/koneksi.php";

$judul = $_POST['judul'];
$alamat = $_POST['alamat'];
$fee = $_POST['fee'];
$des = $_POST['des'];
$gambar = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$id_user = $_POST['id_user'];

$gambarbaru = date('dmYHis').$gambar;

$path = "foto/".$gambarbaru;
if(move_uploaded_file($tmp, $path)){
	$sql = "INSERT INTO informasi VALUES('','$judul','$alamat','$fee','$des','$gambarbaru','$id_user')";
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