<?php
include("koneksi.php");
$id= $_GET['id_tav'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_tav WHERE id_tav='$id'");

if ($query) {
echo "<script>alert('Apakah anda yakin untuk menghapus?');window.location.href='./../view/tav.php'</script>";
}else{
 echo "<script>alert('gagal di hapus');</script>";
}
?>



