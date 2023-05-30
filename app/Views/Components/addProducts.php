<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addProducts">
                Add Products
              </button>
                  <!-- Modal -->
                  <div class="modal fade" id="addProducts" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5">Products</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="<?php echo $GLOBALS['path']?>/products/addProducts" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="mb-3">
                                  <label for="nama_produk" class="form-label">Nama Produk</label>
                                  <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukan nama produk" required>
                                </div>

                                <div class="mb-3">
                                  <label for="tanggal" class="form-label">Tanggal Wisata</label>
                                  <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                                </div>

                                <div class="mb-3">
                                  <label for="harga" class="form-label">Harga Produk</label>
                                  <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukan harga produk" required>
                                </div>

                                <div class="mb-3">
                                  <label for="img_produk" class="form-label">Upload Gambar Produk</label>
                                  <input type="file" class="form-control" name="img_produk" id="img_produk" required>
                                </div>

                                <div class="mb-3">
                                  <label for="provinsi" class="form-label">Provinsi Produk</label>
                                  <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Masukan provinsi lokasi" required>
                                </div>

                                <div class="mb-3">
                                  <label for="detail_lokasi" class="form-label">Detail Lokasi</label>
                                  <input type="text" class="form-control" name="detail_lokasi" id="detail_lokasi" placeholder="Masukan detail lokasi" required>
                                </div>

                                <div class="mb-3">
                                  <label for="img_provinsi" class="form-label">Upload Gambar Provinsi</label>
                                  <input type="file" class="form-control" name="img_provinsi" id="img_provinsi" required>
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                              <button type="reset" class="btn btn-danger" >Reset</button>
                              <input type="submit" class="btn btn-primary" value="Save Data"></input>
                            </div>

                        </form>

  
                      </div>
                    </div>
                  </div>