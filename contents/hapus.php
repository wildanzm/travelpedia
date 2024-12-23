<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'travelpedia';

$db = mysqli_connect($hostname, $username, $password, $database_name);

$id_pemesanan = htmlentities($_GET['id']);

$sql = "SELECT * FROM pemesanan where id = '$id_pemesanan' and is_deleted=0";

$query = mysqli_query($db, $sql);

if (mysqli_num_rows($query) == 0) {
   echo 'tidak ada';
   exit;
} else {
   $sql_hapus = "UPDATE pemesanan SET is_deleted='1' where id ='$id_pemesanan'";
   $query_hapus = mysqli_query($db, $sql_hapus);
   //var_dump($sql_hapus); exit;
   if ($query_hapus) {
      header('Location: index.php?aksi=daftar-pemesanan');
   } else {
      header('Location: index.php?aksi=detail&id=' . $id_pemesanan);
   }
}
