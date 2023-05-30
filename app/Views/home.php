<!doctype html>
<html lang="en">
    <?php require_once '../app/Views/Components/head.php'; ?>
  <body>

    <?php require_once '../app/Views/Components/navbar.php'; ?>

    <main class="container-fluid">

      <?php require_once '../app/Views/Components/product-select.php'; ?>

      <?php require_once '../app/Views/Components/destinations.php'; ?>

      <?php require_once '../app/Views/Components/locations.php'; ?>

      <?php require_once '../app/Views/Components/about-us.php'; ?>


    </main>
    
    <?php require_once '../app/Views/Components/footer.php'; ?>
    

    <?php  require_once '../app/Views/Components/cdn-bootstrap.php' ?> 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php echo $GLOBALS['path']?>/js/index.js ?>"></script>

  </body>
</html>