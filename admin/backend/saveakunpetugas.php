<?php
 include('koneksi.php');
 if (isset($_POST['myModal'])) {
 	$nma = $_POST['nama'];
 	$usnam = $_POST['username'];
 	$pas = $_POST['password'];
 	$hkak = $_POST['level'];

 $query = mysqli_query($koneksi,"INSERT INTO user VALUES(NULL,'$nma','$usnam','$pas','$hkak')");
 if ($query > 0) {
 echo "<script>alert('Data berhasil ditambahkan!'); window.location='./../view/akunpetugas.php';</script>";
 }else{
  echo "<script>alert('gagal di tambah');'</script>";
 }
 }
 ?>
