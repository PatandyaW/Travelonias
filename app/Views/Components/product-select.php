<article class="row  custome-section1">
        <section class="mx-auto my-auto col-12 col-lg-7 ">
          <form method="GET" action="<?php echo $GLOBALS['path']?>/detail">
            <div class="card d-flex">
              <div class="card-body d-flex justify-content-evenly align-items-end ">
                  <div>
                    <label for="destinations" class="form-label fs-5 fw-bold ">Destination</label>
                    <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Yogyakarta" required>
                  </div>
                  <div>
                    <label for="date" class="form-label fs-5 fw-bold">Date</label>
                    <input class="form-control"  type="date" name="tanggal" id="tanggal" required>
                  </div>
                  <input type="submit" class="btn btn-success btn-cari custome-button2" value="Go">
              </div>
            </div>
          </form>
        </section>
 </article>