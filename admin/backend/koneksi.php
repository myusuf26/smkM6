<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "smkm6";

$koneksi = mysqli_connect($host,$username,$password,$database);
if ($koneksi->connect_error) {
  die('gagal');
}

?>