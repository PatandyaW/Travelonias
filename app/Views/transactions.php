<!DOCTYPE html>
<html lang="en">
  <?php require_once '../app/Views/Components/head.php'; ?>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
       
          <?php require_once '../app/Views/Components/sidebar.php'; ?>
        
        <div class="col py-3">
          <div class="card">
            <h1 class="card-header bg-info text-white mb-4">Transactions</h1>
            <div class="card-body ">
                <div class="table-responsive ">
                    <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Pembeli</th>
                                <th>Nama Produk</th>
                                <th>Jumlah Pembelian</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Bukti Pembayaran</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data['datas-transaction'] as $transaction){ ?>
                            <tr>
                                <td><?php echo $transaction['nama_pembeli']?></td>
                                <td><?php echo $transaction['nama_produk'] ?></td> 
                                <td><?php echo $transaction['jumlah_pembelian'] ?></td>
                                <td><?php echo $transaction['no_hp']?></td>
                                <td><?php echo $transaction['email']?></td>
                                <td><img src="<?php echo $GLOBALS['path'] ?>/assets/transaction/<?php echo $transaction['bukti_transfer'] ?>" alt="<?php echo $$transaction['bukti_transfer'] ?>" width="200px"></td>
                                <td><?php echo $transaction['status']?></td>
                                
                                <td>
                                  <?php if($transaction['status'] == 'Pending') { ?>
                                    <a href="<?php echo $GLOBALS['path']?>/transactions/statusSukses/<?php echo $transaction['id_transaksi'] ?>"  class="btn btn-success mb-1"  data-bs-toggle="modal" data-bs-target="#editProducts<?= $produk['id_produk'] ?>" >
                                      <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16 ">
                                      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                      </svg>
                                    </a>
                                    <a href="<?php echo $GLOBALS['path']?>/transactions/statusGagal/<?php echo $transaction['id_transaksi'] ?>" class="btn btn-warning mb-1">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                      </svg>
                                    </a>
                                    <a href="<?php echo $GLOBALS['path']?>/transactions/deleteTransaction/<?php echo $transaction['id_transaksi'] ?>" class="btn btn-danger">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                      </svg>
                                    </a>

                                  <?php } else { ?>
                                    <a href="<?php echo $GLOBALS['path']?>/transactions/deleteTransaction/<?php echo $transaction['id_transaksi'] ?>" class="btn btn-danger">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                      </svg>
                                    </a>
                                  <?php } ;?>
                                </td>
                            </tr>
                            
                          <?php } ; ?>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>

<?php  require_once '../app/Views/Components/cdn-bootstrap.php' ?> 

</body>


</html>