<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'travelpedia';

$db = mysqli_connect($hostname, $username, $password, $database_name);

$sql = "SELECT * FROM pemesanan where is_deleted = 0 order by created_at desc";

$query = mysqli_query($db, $sql);

if (mysqli_num_rows($query) == 0) {
?>
   <h1 class="text-center my-3">Daftar Pemesanan</h1>
   <table class="table table-primary table-striped mb-5 container">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Tanggal Berangkat</th>
            <th scope="col">Durasi</th>
            <th scope="col">Jumlah Peserta</th>
            <th scope="col">Jenis Paket</th>
            <th scope="col">Total Tagihan</th>
            <th scope="col">Detail</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td colspan="9" class="text-center">Data tidak ditemukan</td>
         </tr>
      </tbody>
   </table>
<?php
   exit;
} else {
?>
   <h1 class="text-center my-3">Daftar Pemesanan</h1>
   <table class="table table-primary table-striped mb-5 container">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Tanggal Berangkat</th>
            <th scope="col">Durasi</th>
            <th scope="col">Jumlah Peserta</th>
            <th scope="col">Jenis Paket</th>
            <th scope="col">Total Tagihan</th>
            <th scope="col">Detail</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $co = 1;
         while ($detail = mysqli_fetch_assoc($query)) {
         ?>
            <tr>
               <th scope="row"><?= $co ?></th>
               <td><?= $detail['nama'] ?></td>
               <td><?= $detail['no_hp'] ?></td>
               <td><?= date("d F Y", strtotime($detail['waktu_wisata'])) ?></td>
               <td><?= $detail['hari_wisata'] ?> hari</td>
               <td><?= $detail['jumlah_peserta'] ?> orang</td>
               <td><?= $detail['paket_wisata'] ?></td>
               <td>Rp. <?= number_format($detail['total_tagihan'], 0, ',', '.') ?></td>
               <td><a class="text-success" href="index.php?aksi=detail&id=<?= $detail['id'] ?>">Detail</a>
                  <a href="index.php?aksi=edit&id=<?= $detail['id'] ?>">Edit</a>
                  <a class="text-danger" href="index.php?aksi=hapus&id=<?= $detail['id'] ?>">Hapus</a>
               </td>
            </tr>
         <?php
            $co++;
         }
         ?>
      </tbody>
   </table>
<?php
}
?>