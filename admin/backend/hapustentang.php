<?php
include("koneksi.php");
$id= $_GET['id_tentang'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_tentang WHERE id_tentang='$id'");

if ($query) {
echo "<script>alert('Apakah anda yakin untuk menghapus?');window.location.href='./../view/tentang.php'</script>";
}else{
 echo "<script>alert('gagal di hapus');</script>";
}
?>



