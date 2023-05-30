<!doctype html>
<html lang="en">
    <?php require_once '../app/Views/Components/head.php'; ?>
  <body>
  <?php require_once '../app/Views/Components/navbar.php'; ?>


  <div class="container">

        <div class="row " style="margin-top : 20vh; ">
          <div class="col-8 mx-auto col-lg-5 border rounded-3  shadow" >
            <div class="form-block" >
              <div class="mb-4 text-center">
                <h3 class="mt-3">Login</h3>
              </div>
              <form action="<?php echo $GLOBALS['path']?>/login/validation" method="post">
                <div class="form-floating">
                     <input type="text" name="username" class="form-control mb-3" id="username" placeholder="nama">
                     <label for="username">Username</label>
                   </div>
                   <div class="form-floating">
                     <input type="password" name="password" class="form-control" id="password" placeholder="password">
                     <label for="password">Password</label>
                   </div>
                   <br/>
                   <?php if( isset($_SESSION['error']) ) { echo "<p>Username atau Password salah </p>" ;} ?>
                   <?php unset($_SESSION['error']);?>
                <input type="submit" value="Sign In" class="btn btn-md text-white btn-block btn-success w-100 ">
                <span class="d-block text-center my-4 text-muted"><u><i> Admin Area</i></u></span>
                  </a>
              </form>
            </div>
          </div>
        </div>
      </div>


  <?php  require_once '../app/Views/Components/cdn-bootstrap.php' ?> 
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="<?php echo $GLOBALS['path']?>/js/index.js ?>"></script>

  </body>
</html>