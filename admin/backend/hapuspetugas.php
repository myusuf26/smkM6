<?php
include("koneksi.php");
$id= $_GET['id_user'];
$query = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");

if ($query) {
echo "<script>alert('Apakah anda yakin untuk menghapus?');window.location.href='./../view/akunpetugas.php'</script>";
}else{
 echo "<script>alert('gagal di hapus');</script>";
}
?>



