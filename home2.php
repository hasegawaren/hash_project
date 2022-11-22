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
    
    <h2 class="display-5 fw-bold"><center>Hashing and Storing Passwords</h2></center>


  <?php 
    require_once("footer.php");
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>


<div class="container col-xxl-7 px-6 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-4 ">
      <div class="col-lg-5">      
      <div class="d-grid gap- d-sm-flex justify-content-sm-center">
        <div class="d-grid gap- d-md-flex justify-content-md-start">
        </div>
      </div>
    </div>
  </div>

  <p ><span style="font-size:larger">Cybersecurity isn’t always a battle to keep hackers out at all costs. Sometimes it’s actually about making the costs just not worth the effort. This is particularly true when it comes to how passwords are stored on your server. Let’s take a look at how to make it more unreasonably costly to the hacker who just compromised the server that holds user passwords.</span></p>
  <h3 class="display-6 fw-bold">Storing Passwords In Plaintext</h3>
  <p ><span style="font-size:larger">Storing passwords in plaintext is a major cybersecurity faux pas. For the hacker, it’s like winning the lottery. They get the keys to your system. And because most people reuse passwords, even a low value system may end up jeopardizing your highest value data.</span></p>
  <p ><span style="font-size:larger">The obvious risk of storing passwords in plaintext doesn’t mean some of the largest and most data-rich companies in the world don’t do it. Social media giant, Facebook, revealed that it had stored “hundreds of millions” of Facebook users’ passwords in plaintext. These plaintext passwords were accessible to thousands of Facebook employees, but Facebook maintains they have found no evidence that this access has been abused. Google has also disclosed a similar case of using plaintext passwords.</span></p>
  <p ><span style="font-size:larger">Despite repeated warnings and obvious danger,s passwords are still being stored in plaintext.</span></p>
  <h3 class="display-6 fw-bold">Using Basic Password Hashing</h3>
  <p ><span style="font-size:larger">Password hashing add a layer of security. Hashing allows passwords to be stored in a format that can’t be reversed at any reasonable amount of time or cost for a hacker.</span></p>
  <p ><span style="font-size:larger">Hashing algorithms turn the plaintext password into an output of characters of a fixed length. The hash output will look nothing like the original password and the length of the hash will be the same regardless of the length of the plaintext password.</span></p>
  <img class="d-block mx-auto mb-4" src="https://images.ctfassets.net/23aumh6u8s0i/ES2U6Gx7w0yVF9Asidr26/75531c3695f09272142b543a94acc0de/hash-flow" alt="" width="800" height="500">