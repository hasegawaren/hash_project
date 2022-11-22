<?php 

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

<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <h3>HASH FUNCTION</h3>
      </a>

      <div class="col-md-3 text-end">
        <?php if (isset($_SESSION['user_login'])) { ?>
            <a href="logout.php" class="btn btn-danger me-2">Logout</a>
        </div>
        <?php } else { ?>
            <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
            <a href="register.php" class="btn btn-primary">Sign-up</a>
        <?php } ?>
    </header>
  </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>

</main>
<main>
  <div  class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('pexels-eberhard-grossgasteiger-1428277.jpg');">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal" style="color:white">Hash Function</h1>
      <br><p class="lead fw-normal" style="color:white">As a result of the author's interest in hash function, it is a mechanism for transforming information through an arithmetic process called Hash to produce unique information.</p>
<p class="lead fw-normal" style="color:white">Therefore, the creators of the hash function have been applied to registering and logging into the website to explain the principles of hash function to be easily understood.</p>
      <a class="btn btn-outline-secondary" href="register.php" style="color:white">Register</a>
      <a class="btn btn-outline-secondary" href="login.php" style="color:white">Login</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>


    </div>
  </div>
</main>
</body>

<?php 
    require_once("footer.php");
  ?>

    <!-- <div class="px-4 py-4 my-4 text-center">
    <h1 class="display-5 fw-bold">Hash function</h1>
    <div class="px-4 py-4 my-4 text-center">
    <img class="d-block mx-auto mb-4" src="https://upload.wikimedia.org/wikipedia/commons/d/da/Hash_function.svg" alt="" width="352" height="284">
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      </div>
    </div>
  </div> -->