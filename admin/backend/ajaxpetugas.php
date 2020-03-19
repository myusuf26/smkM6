<?php
ob_start();
include("koneksi.php");
$id = $_GET['id'];

$cari=mysqli_query($connect,"SELECT * from  user where id_user='$id' ");
$tampil=mysqli_fetch_array($cari);
?>
<div id="id_user"><?php echo $tampil['id_user']; ?></div>
<div id="nama"><?php echo $tampil['nama']; ?></div>
<div id="username"><?php echo $tampil['username']; ?></div>
<div id="password"><?php echo $tampil['password']; ?></div>
<div id="level"><?php echo $tampil['level']; ?></div>
