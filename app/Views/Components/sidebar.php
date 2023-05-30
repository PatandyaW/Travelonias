<div class="col-auto side-nav vh-100 col-md-3 col-xl-2 px-sm-2 px-0 my-3 shadow-lg rounded">
            <!-- <div class="d-flex flex-column  align-items-center align-items-sm-start px-3 pt-5  text-dark min-vh-100">
                <h1 class="fs-3 d-none d-sm-inline">Admin Area</h1>
                <ul class="nav nav-pills flex-column my-5 align-items-center align-items-sm-start">
                    <li class="nav-item">
                        <a href="<?php echo $GLOBALS['path']?>/admin" class="nav-link align-middle px-0">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="grey" class="bi bi-house-door" viewBox="0 0 16 20">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                          </svg>
                          <span class="ms-1 fs-5 d-none d-sm-inline text-black">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $GLOBALS['path']?>/products" class="nav-link align-middle px-0">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="grey" class="bi bi-cart " viewBox="0 0 16 20">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                          <span class="ms-1 fs-5 d-none d-sm-inline text-black">Products</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $GLOBALS['path']?>/transactions" class="nav-link align-middle px-0">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="grey" class="bi bi-credit-card" viewBox="0 0 16 20">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                          </svg>
                          <span class="ms-1 fs-5 d-none d-sm-inline text-black">Transactions</span>
                        </a>
                    </li>
                </ul>
                <a href="<?php echo $GLOBALS['path']?>/home" class="nav-link align-middle px-0">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="red" class="bi bi-box-arrow-right" viewBox="0 0 16 20">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                          </svg>
                          <span class="ms-1 fs-5 d-none d-sm-inline text-danger">Sign Out</span>
                </a>
            </div>
        </div> -->


      <nav class="p-3">
        <img class="img-fluid bg-light rounded  mx-auto mt-5 mb-3 d-flex" src="<?php echo $GLOBALS['path']?>/assets/admin/<?php echo $_SESSION['ava'] ?>" class="logo-img" width="100px; ?>" />
        <p class="d-none text-white mb-5 text-center d-lg-block"><?php echo $_SESSION['username'] ?></p>
        <ul class="nav-links">
          <li>
            <a href="<?php echo $GLOBALS['path']?>/admin"><i class="fa-solid fa-house-user"></i>
              <p class="pt-3">Dashboard</p></a>
          </li>
          <li>
            <a  href="<?php echo $GLOBALS['path']?>/products"
              ><i class="fa-solid fa-cart-shopping"></i>
              <p class="pt-3">Product</p></a
            >
          </li>
          <li>
            <a  href="<?php echo $GLOBALS['path']?>/transactions" 
              ><i class="fa-solid fa-wallet"></i>
              <p class="pt-3">Transaction</p></a
            >
          </li>
          <li>
            <a href="<?php echo $GLOBALS['path']?>/profile" >
              <i class="fa-sharp fa-solid fa-id-card"></i>
              <p class="pt-3">Profile</p>
            </a>
          </li>
          <li>
            <a href="<?php echo $GLOBALS['path']?>/login/logout" ><i class="fa-solid fa-right-from-bracket text-danger"></i>
              <p class="pt-3 text-danger">Sign out</p></a >
          </li>
        
        </ul>

      </nav>

</div>

  