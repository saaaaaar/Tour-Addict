<?php
  include '../conf/koneksi.php';

  $id = $_GET['id'];
  $status = TRUE;
  $query = "UPDATE ajuan SET status='$status' WHERE id='$id";
  $hasil = $koneksi->query($query);
  if ($hasil === TRUE) {
      echo"<script>alert('Verifikasi Berhasil!')".$koneksi->error.";</script>";
      header("Location: tabel.php");
  }
    // }else{
    //   echo"<script>alert('Verifikasi gagal!')".$koneksi->error.";</script>";
    // header('Location: tabel.php');
    // }
  $koneksi->close();
?>