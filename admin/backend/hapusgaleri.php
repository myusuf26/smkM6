<?php
include("koneksi.php");
$id= $_GET['id_galeri'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_galeri WHERE id_galeri='$id'");

if ($query) {
echo "<script>alert('Apakah anda yakin untuk menghapus?');window.location.href='./../view/galeri.php'</script>";
}else{
 echo "<script>alert('gagal di hapus');</script>";
}
?>