<?php
include('koneksi.php');
// var_dump($_POST);
if (isset($_POST['edit'])) {
	$idusr= $_POST['id_user'];
	$nma = $_POST['nama'];
	$usnam = $_POST['username'];
	$pas = $_POST['password'];
	$hkak=$_POST['level'];

$edit = mysqli_query($koneksi,"UPDATE user SET nama='$nma',username='$usnam',password='$pas',level='$hkak' WHERE id_user='$idusr'");
if ($edit > 0 ) {
    echo "<script>alert('Data berhasil Diedit!'); window.location='./../view/akunadmin.php';</script>";
}else{
echo "<script>alert('gagal di edit');'</script>";
}
}
?>
