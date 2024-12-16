<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center pb-4">
         <div data-aos="fade-up" class="col-md-12 heading-section text-center">
            <h2 class="mb-4">Buat Pesanan Kamu</h2>
         </div>
         <main class="flex-shrink-0">
            <div class="container">
               <form method="post" action="lib/proses.php">
                  <div class="card mt-2" data-aos="fade-up">
                     <div class="card-header bg-dark text-white">
                        Form Pemesanan Paket Wisata
                     </div>
                     <div class="card-body">
                        <div class="mb-3">
                           <label for="nama_pemesanan" class="form-label fw-bold">Nama Lengkap</label>
                           <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" placeholder="Nama Lengkap Sesuai Tanda Pengenal" required>
                        </div>
                        <div class="mb-3">
                           <label for="hp_pemesan" class="form-label fw-bold">Nomor Handphone</label>
                           <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" placeholder="Nomor Handphone 08..." required>
                        </div>
                        <div class="mb-3">
                           <label for="waktu_wisata" class="form-label fw-bold">Waktu Mulai Perjalanan</label>
                           <input type="date" class="form-control" id="waktu_wisata" name="waktu_wisata" placeholder="Waktu Mulai Perjalanan" required>
                        </div>
                        <div class="mb-3">
                           <label for="hari_wisata" class="form-label fw-bold">Hari Wisata</label>
                           <input type="number" class="form-control" id="hari_wisata" value="1" name="hari_wisata" placeholder="Jumlah Hari Perjalanan" required>
                        </div>
                        <div class="mb-3">
                           <label for="paket_wisata fw-bold" class="form-label fw-bold">Paket Wisata</label>
                        </div>
                        <div class="mb-3">
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="paket_wisata" value="Paket Bronze" id="paket_bronze">
                              <label class="form-check-label" for="paket_bronze">
                                 Bronze (Rp. 750K)
                              </label>
                           </div>
                        </div>
                        <div class="mb-3">
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="paket_wisata" value="Paket Silver" id="paket_silver">
                              <label class="form-check-label" for="paket_silver">
                                 Silver (Rp. 1.25K)
                              </label>
                           </div>
                        </div>
                        <div class="mb-3">
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="paket_wisata" value="Paket Gold" id="paket_gold">
                              <label class="form-check-label" for="paket_gold">
                                 Gold (Rp. 1.65K)
                              </label>
                           </div>
                        </div>
                        <div class="mb-3">
                           <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
                           <input type="number" class="form-control" id="jumlah_peserta" value="1" name="jumlah_peserta" placeholder="Jumlah Hari Perjalanan" required>
                        </div>
                        <div class="mb-3">
                           <label for="harga" class="form-label">Harga Paket</label>
                           <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Paket Perjalanan" readonly>
                        </div>
                        <div class="mb-3">
                           <label for="total" class="form-label">Total Tagihan</label>
                           <input type="number" class="form-control" id="total" name="total" placeholder="Total Paket Perjalanan" readonly>
                        </div>
                     </div>
                     <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <input type="reset" class="btn btn-danger" value="Ulangi">
                     </div>
                  </div>
                  <script>
                     //tentukan konstanta biaya masing-masing
                     const paket_bronze = 750000;
                     const paket_silver = 1250000;
                     const paket_gold = 1650000;

                     function updateTotalCost() {
                        //inisisi harga paket 0
                        let totalCost = 0;

                        //referensi dari checkbox
                        const bronzeCheckbox = document.getElementById('paket_bronze');
                        const silverCheckbox = document.getElementById('paket_silver');
                        const goldCheckbox = document.getElementById('paket_gold');

                        //jika inap checkbox ter-check
                        if (bronzeCheckbox.checked) {
                           totalCost += paket_bronze;
                        }

                        //jika transport checkbox ter-check
                        if (silverCheckbox.checked) {
                           totalCost += paket_silver;
                        }

                        //jika makan checkbox ter-check
                        if (goldCheckbox.checked) {
                           totalCost += paket_gold;
                        }

                        document.getElementById('harga').value = totalCost;
                     }

                     function updateTotal() {
                        let TotalTagihan = 0;

                        var hari_wisata = document.getElementById('hari_wisata').value;
                        var jumlah_peserta = document.getElementById('jumlah_peserta').value;
                        var harga = document.getElementById('harga').value;

                        TotalTagihan = hari_wisata * jumlah_peserta * harga;

                        document.getElementById('total').value = TotalTagihan;
                     }

                     document.getElementById('paket_bronze').addEventListener('change', updateTotalCost);
                     document.getElementById('paket_silver').addEventListener('change', updateTotalCost);
                     document.getElementById('paket_gold').addEventListener('change', updateTotalCost);

                     document.getElementById('paket_bronze').addEventListener('change', updateTotal);
                     document.getElementById('paket_silver').addEventListener('change', updateTotal);
                     document.getElementById('paket_gold').addEventListener('change', updateTotal);

                     document.getElementById('hari_wisata').addEventListener('change', updateTotalCost);
                     document.getElementById('jumlah_peserta').addEventListener('change', updateTotalCost);

                     document.getElementById('hari_wisata').addEventListener('change', updateTotal);
                     document.getElementById('jumlah_peserta').addEventListener('change', updateTotal);

                     updateTotalCost();
                     updateTotal();
                  </script>
            </div>
         </main>

      </div>
   </div>
</section>