<!DOCTYPE html>
<html lang="en">
  <?php require_once '../app/Views/Components/head.php'; ?>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
       
        <?php require_once '../app/Views/Components/sidebar.php'; ?>
        
        <div class="col py-3 ">
          <div class="container">
                <h1 class="mb-4">Products</h1>

                
                <?php require_once '../app/Views/Components/addProducts.php'; ?>
    

                <div class="card shadow mb-4">
                    <div class="card-header bg-info text-white py-3">
                      <h2>Data</h2>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive ">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Tanggal</th>
                                        <th>Harga</th>
                                        <th>Gambar Produk</th>
                                        <th>Provinsi</th>
                                        <th>Lokasi</th>
                                        <th>Gambar Provinsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($data['data-produk'] as $produk){ ?>
                                    <tr>
                                        <td><?php echo $produk['nama_produk']?></td>
                                        <td><?php echo date("d-M-Y", strtotime($produk['tanggal'])) ?></td> 
                                        <td><?php echo "Rp ". number_format($produk['harga'], 2, ',','.' ) ?></td>
                                        <td><img src="<?php echo $GLOBALS['path'] ?>/assets/produks/gambar-products/<?php echo $produk['img_produk'] ?>" alt="<?php echo $produk['img_produk'] ?>" width="200px"></td>
                                        <td><?php echo $produk['provinsi']?></td>
                                        <td><?php echo $produk['detail_lokasi']?></td>
                                        <td><img src="<?php echo $GLOBALS['path'] ?>/assets/produks/gambar-provinsi/<?php echo $produk['img_provinsi'] ?>" alt="<?php echo $produk['img_provinsi'] ?>" width="200px"></td>
                                        <td>
                                          <a class="btn btn-warning my-1"  data-bs-toggle="modal" data-bs-target="#editProducts<?= $produk['id_produk'] ?>" >Edit</a>
                                          <a href="<?php echo $GLOBALS['path']?>/products/deleteProduct/<?php echo $produk['id_produk'] ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>

                                    <!-- Awal Popup Modal Edit -->

                                    <div class="modal fade" id="editProducts<?= $produk['id_produk'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5">Products</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="<?php echo $GLOBALS['path']?>/products/editProduct/<?= $produk['id_produk'] ?>" enctype="multipart/form-data">

                                          <div class="modal-body">
                                                <div class="mb-3">
                                                  <label for="nama_produk" class="form-label">Nama Produk</label>
                                                  <input type="text" value="<?php echo $produk['nama_produk'] ?>" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukan nama produk" >
                                                </div>

                                                <div class="mb-3">
                                                  <label for="tanggal" class="form-label">Tanggal Wisata</label>
                                                  <input type="date" value="<?php echo $produk['tanggal'] ?>" class="form-control" name="tanggal" id="tanggal" >
                                                </div>

                                                <div class="mb-3">
                                                  <label for="harga" class="form-label">Harga Produk</label>
                                                  <input type="number" value="<?php echo $produk['harga'] ?>" class="form-control" name="harga" id="harga" placeholder="Masukan harga produk" >
                                                </div>

                                                <div class="mb-3">
                                                  <label for="img_produk" class="form-label">Upload Gambar Produk</label> <br>
                                                  <img class="my-1" src="<?php echo $GLOBALS['path']?>/assets/produks/gambar-products/<?php echo $produk['img_produk'] ?>"  width="100px" alt="<?php echo $produk['img_produk'] ?>" > <br>
                                                  <input type="file"  class="form-control" name="img_produk" id="img_produk" >
                                                </div>

                                                <div class="mb-3">
                                                  <label for="provinsi" class="form-label">Provinsi Produk</label>
                                                  <input type="text" value="<?php echo $produk['provinsi'] ?>" class="form-control" name="provinsi" id="provinsi" placeholder="Masukan provinsi lokasi" >
                                                </div>

                                                <div class="mb-3">
                                                  <label for="detail_lokasi" class="form-label">Detail Lokasi</label>
                                                  <input type="text" value="<?php echo $produk['detail_lokasi'] ?>" class="form-control" name="detail_lokasi" id="detail_lokasi" placeholder="Masukan detail lokasi" >
                                                </div>

                                                <div class="mb-3">
                                                  <label for="img_provinsi" class="form-label">Upload Gambar Provinsi</label> <br>  
                                                  <img class="my-1" src="<?php echo $GLOBALS['path']?>/assets/produks/gambar-provinsi/<?php echo $produk['img_provinsi'] ?>"  width="100px" alt="<?php echo $produk['img_provinsi'] ?>" > <br>
                                                  <input type="file"  class="form-control" name="img_provinsi" id="img_provinsi" >
                                                </div>
                                            
                                            </div>
                                            <div class="modal-footer">
                                              <button type="reset" class="btn btn-danger" >Reset</button>
                                              <input type="submit" class="btn btn-warning" value="Edit Data"></input>
                                            </div>

                                        </form>
                                      
                                      </div>

                                    </div>
                                  </div>
                                    
                                  <?php }; ?>

                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



          </div>
        </div>
    </div>
</div>

<?php  require_once '../app/Views/Components/cdn-bootstrap.php' ?> 


</body> 


</html>