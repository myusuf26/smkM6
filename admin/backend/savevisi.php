<?php
 include_once('koneksi.php');
 if (isset($_POST['myModal'])) {
 	$vi = $_POST['visi'];
 	$mi= $_POST['misi'];


 $query = mysqli_query($koneksi,"INSERT INTO tbl_visimisi VALUES(NULL,'$vi','$mi')");
 if ($query > 0) {
 echo "<script>alert('Data berhasil ditambahkan!'); window.location='./../view/visi.php';</script>";
 }else{
  echo "<script>alert('gagal di tambah');'</script>";
 }
 }
 ?>
