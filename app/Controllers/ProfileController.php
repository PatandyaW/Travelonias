<?php 

class ProfileController extends Controller {

  public function index(){
    session_start();
    
    if($_SESSION['login'] == 'sukses') {
      $admin = $this->model('DataProfile')->showProfile($_SESSION['username'] ) ;
      return $this->view('profile', ['data-profile' => $admin]) ;
    } else {
      header('location:http://localhost/Travelonia/public/login') ;
    }
  }

  public function editProfile(){

    session_start();

    $inputFileNew = $_FILES['inputAvatar']['name'] ;
    $nama = $_POST['name'] ;
    $userName = $_SESSION['username'] ;
    $pass = $_POST['password'] ;
    $alamat = $_POST['alamat'] ;

    $fileOld = $_SESSION['ava'] ;

    $updateFile = $fileOld ;

    if($inputFileNew != null ){
      $updateFile = $inputFileNew;
      move_uploaded_file($_FILES['inputAvatar']['tmp_name'], '../public/assets/admin/'.$_FILES['inputAvatar']['name']);
    }

   $this->model('DataProfile')->updateProfile($updateFile, $nama, $userName, $pass, $alamat) ;
   
   session_reset();
   $_SESSION['username'] = $userName;
   $_SESSION['ava'] = $updateFile ;
   $_SESSION['login'] = 'sukses' ;
    header('location:http://localhost/Travelonia/public/profile') ;
    




    
  }

}

?>