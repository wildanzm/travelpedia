<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'travelpedia';

$db = mysqli_connect($hostname, $username, $password, $database_name);

$id_pemesanan = htmlentities($_GET['id']);

$sql = "SELECT * FROM pemesanan where id = '$id_pemesanan'";

$query = mysqli_query($db, $sql);
date_default_timezone_set('Asia/Jakarta');

if (mysqli_num_rows($query) == 0) {
   echo 'tidak ada';
   exit;
} else {
   $detail = mysqli_fetch_row($query);
?>

   <main class="flex-shrink-0 py-5">
      <div class="container">
         <form method="post" action="lib/proses.php">
            <div class="card mt-2" data-aos="fade-up">
               <div class="card-header bg-dark text-white">
                  Invoice Pemesanan #<?= $detail[0] ?>
               </div>
               <div class="card-body">
                  <div class="mb-3">
                     <label for="nama_pemesanan" class="form-label fw-bold">Nama Lengkap</label>
                     <p><?= $detail[1] ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="hp_pemesan" class="form-label fw-bold">Nomor Handphone</label>
                     <p><?= $detail[2] ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="waktu_wisata" class="form-label fw-bold">Waktu Mulai Perjalanan</label>
                     <p><?= date("d F Y", strtotime($detail[3])) ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="hari_wisata" class="form-label fw-bold">Hari Wisata</label>
                     <p><?= $detail[4] ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="paket_wisata fw-bold" class="form-label fw-bold">Paket Wisata</label>
                     <p><?= $detail[5] ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="jumlah_peserta" class="form-label fw-bold">Jumlah Peserta</label>
                     <p><?= $detail[6] ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="harga" class="form-label fw-bold">Total Tagihan</label>
                     <p>Rp. <?= number_format($detail[7], 0, ',', '.') ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="created_at" class="form-label fw-bold">Waktu Pemesanan</label>
                     <p><?= date("d F Y H:i:s", strtotime($detail[8])) ?></p>
                  </div>
               </div>
            </div>
            <div class="card-footer d-print-none">
               <a href="index.php?aksi=pesan" class="btn btn-primary">Buat Pesanan Baru</a>
               <a href="#" onclick="window.print()" class="btn btn-success">Cetak</a>
            </div>
      </div>
      </div>
   </main>
<?php } ?>