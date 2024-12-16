<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';

switch ($aksi) {
   case 'pemesanan':
      include 'contents/pemesanan.php';
      break;

   case 'detail':
      include 'contents/detail.php';
      break;

   default:
      include 'contents/main.php';
      break;
}
