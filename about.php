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

    
    <main>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
  </div>
  
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

      <div class="container">
        <div class="carousel-caption text-end">
          <h1>One more for good measure.</h1>
          <p>Some representative placeholder content for the third slide of this carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img src="fox.png" alt="Bootstrap" class="bd-placeholder-img rounded-circle" width="140" height="140"></svg>

      <h2 class="fw-normal">Student ID</h2>
      <p>64109010034</p>
      <p>64109010180</p>
      <p>64109010353</p>
      <p>64109010400</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
    <img src="rabbit.png" alt="Bootstrap" class="bd-placeholder-img rounded-circle" width="140" height="140"></svg>

    
      <h2 class="fw-normal">Contact</h2>
      <p>bongkotchakorn.sinnok@g.swu.ac.th</p>
      <p>wanwanat.vongsuwan@g.swu.ac.th</p>
      <p>phichittra.jeenduang@g.swu.ac.th</p>
      <p>thanrada.wongsawat@g.swu.ac.th </p>
     
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
    <img src="santa-claus.png" alt="Bootstrap" class="bd-placeholder-img rounded-circle" width="140" height="140"></svg>


      <h2 class="fw-normal">University</h2>
      <p>Srinakharinwirot university</p>
      
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

    </div>
  </div>

</div><!-- /.container -->

</main>