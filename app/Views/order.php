<!DOCTYPE html>
<html lang="en">
  <?php require_once '../app/Views/Components/head.php'; ?>
<body>
  <?php require_once '../app/Views/Components/navbar.php'; ?>

  <main class="container-fluid">
      <article class="container py-5">
          <section class="row g-4">
            <div class="order-2 order-md-1 col-md-8 bg-light border rounded-3 p-4">

                  <!-- Ini buat icon dan detail Pemesan-->
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 ">
                      <img src="<?php echo $GLOBALS['path']?>/assets/icons/icon-contacts.png" alt="icon" class="rounded-circle border border-grey p-1" width="35px">
                    </div>
                    <div class="flex-grow-1 pt-1 ms-3">
                      <h3 class="fs-6">Detail Pemesan</h3>
                    </div>
                  </div>

                  <!-- Mulai dari sini formnya -->
                  <form method="POST" action="<?php echo $GLOBALS['path']?>/confirmation?id=<?php echo  $data['data-produk']['id_produk'] ?>">

                    <div class="mb-3">
                      <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                      <input type="text" name="namaLengkap"  class="form-control" id="namaLengkap" placeholder="Masukkan nama">
                    </div>

                    <div class="mb-3">
                      <label for="emailPengguna" class="form-label">Alamat Email</label>
                      <input type="email" name="emailPengguna" class="form-control" id="emailPengguna" placeholder="Masukkan email">
                    </div>

                    <div class="mb-3">
                    <label for="notelp" class="form-label">Nomor Telepon</label>
                      <input type="tel" name="notelp" class="form-control" id="notelp" aria-label="nomor telepon" placeholder="Nomor Telepon">
                    </div>

                    <div class="mb-3">
                    <label for="jumlahPesanan" class="form-label">Jumlah Pesanan</label>
                      <input type="number" name="jumlahPesanan" class="form-control" id="jumlahPesanan" aria-label="jumlah pemesanan" >
                    </div>

                    <div class="mb-3">
                      <p class="form-label">Pilih Metode Pembayaran</p>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="BCA" name="payment-method" value="BCA" required>
                        <label class="form-check-label" for="BCA" >
                          BCA 12412252515
                        </label>
                      </div>
                      <div class="form-check pt-1">
                        <input class="form-check-input" type="radio" id="MANDIRI" name="payment-method" value="MANDIRI" required >
                        <label class="form-check-label" for="MANDIRI">
                          MANDIRI 9244124124
                        </label>
                      </div>
                      <div class="form-check pt-1">
                        <input class="form-check-input" type="radio" id="BNI" name="payment-method" value="BNI" required>
                        <label class="form-check-label" for="BNI">
                          BNI 1233124124
                        </label>
                      </div>
                      <div class="form-check pt-1">
                        <input class="form-check-input" type="radio" id="DANA" name="payment-method" value="DANA" required>
                        <label class="form-check-label" for="DANA">
                          DANA 082314124124
                        </label>
                      </div>
                    </div>

                     <input type="submit" value="Konfirmasi Pembayaran" class="mt-4   btn btn-success" ></input>

                  </form>
            </div>

            <div class="order-1 order-md-2 col-md-3  offset-md-1 bg-light border rounded-3 p-4" >
              <h3 class="fs-4 pb-2">Detail Pemesanan</h3>

            
              <img src="<?php echo $GLOBALS['path']?>/assets/produks/gambar-products/<?php echo  $data['data-produk']['img_produk'] ?>" alt="gambar detail pesanan" class="img-fluid rounded" >
              <p class="fs-5 fw-bold pt-3"><?php echo  $data['data-produk']['nama_produk'] ?> </p>
              <hr>

              <!-- <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="" alt="icon" width="30px">
                </div>
                <div class="flex-grow-1 pt-2 ms-3">
                  <p>Berlaku 7 hari sejak tanggal terpilih</p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="" alt="icon" width="30px">
                </div>
                <div class="flex-grow-1 pt-2 ms-3">
                  <p>Tidak perlu reservasi</p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="" alt="icon" width="30px">
                </div>
                <div class="flex-grow-1 pt-2 ms-3">
                  <p>Tidak bisa refund</p>
                </div>
              </div> -->

              <h4 class="fs-5">Provinsi</h4>
              <p><?php echo $data['data-produk']['provinsi'] ?></p>

              <h4 class="fs-5">Detail Lokasi</h4>
              <p><?php echo $data['data-produk']['detail_lokasi'] ?></p>


              <hr>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-auto">
                  <p class="fw-bold">Harga</p>
                </div>
                <div class="flex-grow-3">
                  <p class="text-primary"><?php echo "Rp ". number_format($data['data-produk']['harga'], 2, ',','.' )    ?></p>
                </div>
              </div>
              <small class="text-muted fs-6">nb : harga produk perorang</small>
            </div>
          </section>


      </article>
  </main>


  <?php require_once '../app/Views/Components/footer.php'; ?>


  <?php  require_once '../app/Views/Components/cdn-bootstrap.php' ?> 
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="<?php echo $GLOBALS['path']?>/js/index.js ?>"></script>

</body>
</html>