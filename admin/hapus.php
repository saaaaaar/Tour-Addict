<?php
  include '../conf/koneksi.php';

  $id = $_GET['id'];
  $sql = "DELETE FROM ajuan WHERE id='$id'";
  $hasil = $koneksi->query($sql);
  if ($hasil === TRUE) {
    echo"<script>alert('Penghapusan data berhasil');</script>";
    header('Location: tabel.php');
  }else{
    
    echo"<script>alert('Penghapusan data gagal')".$koneksi->error.";</script>";
    header('Location: tabel.php');
  }
  $koneksi->close();
?>