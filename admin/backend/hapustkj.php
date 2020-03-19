<?php
include("koneksi.php");
$id= $_GET['id_tkj'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_tkj WHERE id_tkj='$id'");

if ($query) {
echo "<script>alert('Apakah anda yakin untuk menghapus?');window.location.href='./../view/tkj.php'</script>";
}else{
 echo "<script>alert('gagal di hapus');</script>";
}
?>



