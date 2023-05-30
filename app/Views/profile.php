<!DOCTYPE html>
<html lang="en">
  <?php require_once '../app/Views/Components/head.php'; ?>
<body>
   
<div class="container-fluid">
<main class="row flex-nowrap">
   <?php require_once '../app/Views/Components/sidebar.php'; ?>

   <div class="col py-3 px-4">
   
    <div class="col-md-7 col-lg-12 bg-light p-5 shadow card vh-100 ">
        <h1>Profile</h1>

        <form method="POST" action="<?php echo $GLOBALS['path']?>/profile/editProfile" enctype="multipart/form-data">
          <div class="row g-3 ">

            <div class="d-flex align-items-center">
              <div class="flex-shrink-0 ">
                <img class="costume-img-profile" src="<?php echo $GLOBALS['path']?>/assets/admin/<?php echo $data['data-profile']['avatar'] ?>" alt="<?php echo $data['data-profile']['avatar'] ?>" >
              </div>
              <div class="flex-grow-1 ms-3">
                <input type="file" name="inputAvatar" >
              </div>
            </div>

            <div class="col-12">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Fullname" value="<?php echo $data['data-profile']['nama_admin'] ;?>" >
            </div>


            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenisKelamin" value="Laki-Laki" id="lakiLaki" <?= $data['data-profile']['jenis_kelamin'] == "Laki-Laki" ? "checked" : "disabled" ?> >
              <label class="form-check-label" for="lakiLaki">
                Laki-Laki
              </label>
            </div>
           
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenisKelamin" value="Perempuan" id="perempuan" <?= $data['data-profile']['jenis_kelamin'] == "Perempuan" ? "checked" : "disabled" ?> >
              <label class="form-check-label" for="perempuan">
                Perempuan
              </label>
            </div>
         
            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="username" placeholder="Your Username" value="<?php echo $data['data-profile']['username'] ;?>" disabled >
            </div>

            <div class="col-12">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password"  class="form-control" id="password" placeholder="Your Password" value="<?php echo $data['data-profile']['password'] ;?>" >
            </div>

            <div class="col-12">
              <label for="alamat" class="form-label">Alamat </label>
              <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="<?php echo $data['data-profile']['alamat'] ;?>" >
            </div>
            
            <input class="btn btn-success" type="submit" value="Ubah Data">


   </div>


  </main>


</div>

  <?php require_once '../app/Views/Components/cdn-bootstrap.php'; ?>
</body>
</html>