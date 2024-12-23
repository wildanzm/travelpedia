<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';

switch ($aksi) {
   case 'pemesanan':
      include 'contents/pemesanan.php';
      break;

   case 'detail':
      include 'contents/detail.php';
      break;
   case 'daftar-pemesanan':
      include 'contents/daftar-pemesanan.php';
      break;
   case 'hapus':
      include 'contents/hapus.php';
      break;

   default:
      include 'contents/main.php';
      break;
}
