<!DOCTYPE html>
<html lang="en">
  <?php require_once '../app/Views/Components/head.php'; ?>
<body>
<div class="container-fluid">
    <main class="row flex-nowrap">
       
        <?php require_once '../app/Views/Components/sidebar.php'; ?>
        
        <div class="col py-3 px-4">
            <div class="container px-4 py-5" id="featured-3">
              <h2 class="card bg-primary text-white p-3 border-bottom mb-3">Dashboard</h2>
               
                 <div class="row mx-auto gap-3 gap-lg-4 px-2 py-2 row-cols-1 row-cols-lg-5  "> 
  
                  <div class="col me-lg-5 card bg-warning shadow p-3">
                    <h3 class="fs-4">Transaksi Pending</h3>
                    <p><?php echo $data['data-status'][0]  ; ?></p>
                  </div>

                 <div class="col  me-lg-5 card bg-success shadow text-white p-3">
                    <h3 class="fs-4">Transaksi Sukses</h3>
                    <p><?php echo $data['data-status'][1]  ; ?></p>
                  </div>


                  <div class="col me-lg-5 card bg-danger shadow text-white p-3">
                    <h3 class="fs-4">Transaksi Gagal</h3>
                    <p><?php echo $data['data-status'][2] ; ?></p>
                  </div>

        
                  <div class="col card bg-info shadow text-white p-3">
                    <h3 class="fs-4">Total Transaksi</h3>
                    <p><?php
                    foreach($data['data-total'] as $total) {
                          echo $total['Total Transaksi'] ;
                    }
                    ?></p>
                  </div>

                </div>
            </div>  
            <div class="container px-5">
              <div class="row card shadow ">
                <div class="col-lg-4 mx-auto" >
                 <canvas  id="myChart"></canvas>

                </div>
              </div>
            </div>
          </div>
        
    </main>
</div>


    <?php require_once '../app/Views/Components/cdn-bootstrap.php' ; ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        
      let ctx = document.getElementById("myChart");
      let myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
              labels: [ "Pending",  "Sukses",  "Gagal" ],
              datasets: [{
                      label: '# of Status',
                      data: [ <?php  foreach($data['data-status'] as $array) {
                          echo '"' . $array . '",'  ;  } ?> ],
                      backgroundColor: [
                          'rgba(255, 206, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(255, 99, 132, 0.2)',

                      ],
                      borderColor: [
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)',  
                      ],
                      borderWidth: 1
                  }]
          }
      });
    </script>


</body>


</html>