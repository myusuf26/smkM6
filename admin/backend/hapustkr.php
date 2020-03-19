<?php
include("koneksi.php");
$id= $_GET['id_tkr'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_tkr WHERE id_tkr='$id'");

if ($query) {
echo "<script>alert('Apakah anda yakin untuk menghapus?');window.location.href='./../view/tkr.php'</script>";
}else{
 echo "<script>alert('gagal di hapus');</script>";
}
?>