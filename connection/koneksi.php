<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'travelpedia';

$db = mysqli_connect($hostname, $username, $password, $database_name);

// if ($db->connect_error) {
//    echo 'eror';
//    die('eror');
// } else{
//    echo 'Koneksi Berhasil';
// }
