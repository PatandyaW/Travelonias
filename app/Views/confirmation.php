<!DOCTYPE html>
<html lang="en">

  <?php require_once '../app/Views/Components/head.php'; ?>

<body>

  <?php require_once '../app/Views/Components/navbar.php'; ?>

  <main class="container-fluid p-5">
      <article class="container">
        <section class="row g-4">
          <div class="col-md-3 mx-auto bg-success border rounded-3 p-4">
            <h3 class="text-white text-center">
              Payment <br />
              Detail
            </h3>
            <hr class="new1" />
            <div class="d-flex align-items-center">
              <div class="flex-shrink-1"><img src="<?php echo $GLOBALS['path']?>/assets/icons/icon-wallet.png" alt="Total pembayaran" width="30px" /></div>
              <div class="flex-grow-1 pt-2 ms-3 mt-2">
                <p class="text-white">Total</p>
              </div>
            </div>
            <div class="costume-margin">
              <p><?php echo "Rp ". number_format(($data['data-produk']['harga'] *  $data['data-buyer']['jumlah_pembelian']), 2, ',','.' )    ?></p>
            </div>

            <hr class="costume-hr" />

            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="<?php echo $GLOBALS['path']?>/assets/icons/icon-calender.png" alt="icon" width="30px" />
              </div>
              <div class="flex-grow-1 pt-2 ms-3 mt-2">
                <p class="text-white">Date</p>
              </div>
            </div>
            <div class="costume-margin">
              <p><?php echo date("D", strtotime($data['data-produk']['tanggal'])) . ", " . date("d-M-Y", strtotime($data['data-produk']['tanggal'])) ?></p>
            </div>
            <hr class="costume-hr" />

            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="<?php echo $GLOBALS['path']?>/assets/icons/icon-merchant.png" alt="icon" width="30px" />
              </div>
              <div class="flex-grow-1 pt-2 ms-3 mt-2">
               <p class="text-white">Metode Payment</p>
            </div>
            </div>
            <div class="costume-margin">
              <p class="text-white"><?php echo $data['data-buyer']['metode_pembayaran']?></p>

            </div>
          </div>

          <div class="col-md-8 bg-white text-center border rounded-3 p-4 ">
            <!-- Ini buat icon dan detail Pemesan-->
      
            <form method="POST" action="<?php echo $GLOBALS['path']?>/confirmation/transaction?id_produk=<?php echo $data['data-produk']['id_produk'] ?> & id_buyer=<?php echo $data['data-buyer']['id_pembeli'] ?>" enctype="multipart/form-data">
                <h3 class="mt-4 mb-3"><b>Confirm Your Payment</b></h3>
                <div class="col-md-12 bg-light text-dark border rounded-3 p-4 mb-3">
                  <h4>Harap transfer sesuai jumlah pembayaran, hingga digit terakhir.</h4>
                  <p>Jika jumlah yang ditransfer tidak sesuai, proses verifikasi pembayaran bisa terhambat</p>
                </div>
                <input class="form-control form-control-sm p-2 mb-4 bg-primary text-white" name="fileConfirmation" type="file" id="fileConfirmation" required>
                  <input class="mx-auto  btn btn-success" type="submit" value="Confirm" ></input>
            </form >

          </div>

        </section>
      </article>
    </main>

  <?php require_once '../app/Views/Components/footer.php'; ?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="<?php echo $GLOBALS['path']?>/js/index.js ?>"></script>

</body>
</html>