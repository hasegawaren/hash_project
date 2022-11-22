<?php 
    session_start();
    if (!isset($_SESSION['user_login'])) {
        header("location: login.php");
    }
    require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register + Line notify</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>    
</head>
<body>

    <?php 
        require_once("nav.php");
    ?>
    

  <?php 
    require_once("footer.php");
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>

<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h2 class="display-4 fw-bold">Download source code here!</h2>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">You can download the source code of this website from the button below.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold"><a href=https://drive.google.com/drive/folders/1itPOL-2Y9A_faVsG9SA-I6kt28jzAcJe?usp=sharing>Get it!</a></button>

        </div>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="pexels-sohail-nachiti-807598.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>