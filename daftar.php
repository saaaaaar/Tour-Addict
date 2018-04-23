<?php
include "conf/koneksi.php";
 
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repass = $_POST['repass'];

if($repass == $password){
	$sql = "INSERT INTO user VALUES('','$username','$password','$email','',0)";
	$hasil = $koneksi->query($sql);
		if ($hasil != TRUE) {
			echo"<script>alert('Data tidak berhasil disimpan !');</script>"; 
		}else{
			echo"<script>alert('Data berhasil di kirimkan !');</script>";
		}
		header('Location: index.php');
	$koneksi->close();
}
else{
	echo"<script>alert('Password tidak sama. mohon ulangi password anda');</script>";
}

?>