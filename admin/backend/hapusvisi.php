<?php
include("koneksi.php");
$id= $_GET['id_visi'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_visimisi WHERE id_visi='$id'");

if ($query) {
echo "<script>alert('Apakah anda yakin untuk menghapus?');window.location.href='./../view/visi.php'</script>";
}else{
 echo "<script>alert('gagal di hapus');</script>";
}
?>