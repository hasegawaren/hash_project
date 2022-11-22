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
    
    
    <h1 class="display-5 fw-bold"><center>About hash function</h1></center>

  <?php 
    require_once("footer.php");
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>

<div class="container col-xxl-8 px-6 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-3">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/da/Hash_function.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="900" height="700" loading="lazy">
      </div>
      <div class="col-lg-6">
      <h4 class="display-6 fw-bold">What is hash function?</h4>
      <p ><span style="font-size:larger">A hash is a mathematical function that converts an input of arbitrary length into an encrypted output of a fixed length. Thus regardless of the original amount of data or file size involved, its unique hash will always be the same size. Moreover, hashes cannot be used to "reverse-engineer" the input from the hashed output, since hash functions are "one-way" (like a meat grinder; you can't put the ground beef back into a steak). Still, if you use such a function on the same data, its hash will be identical, so you can validate that the data is the same (i.e., unaltered) if you already know its hash.</span></p>
       
          
      <div class="d-grid gap- d-sm-flex justify-content-sm-center">
        <div class="d-grid gap- d-md-flex justify-content-md-start">

        
        </div>
      </div>
    </div>
  </div>

  <h3 class="display-6 fw-bold">Types of Hashing</h3>
  <p ><span style="font-size:larger">There are many different types of hash algorithms such as RipeMD, Tiger, xxhash and more, but the most common type of hashing used for file integrity checks are MD5, SHA-2 and CRC32.</span></p>
  <p ><span style="font-size:larger"><strong>MD5</strong> - An MD5 hash function encodes a string of information and encodes it into a 128-bit fingerprint. MD5 is often used as a checksum to verify data integrity. However, due to its age, MD5 is also known to suffer from extensive hash collision vulnerabilities, but it’s still one of the most widely used algorithms in the world.</span></p>
  <p ><span style="font-size:larger"><strong>SHA-2</strong> – SHA-2, developed by the National Security Agency (NSA), is a cryptographic hash function. SHA-2 includes significant changes from its predecessor, SHA-1. The SHA-2 family consists of six hash functions with digests (hash values) that are 224, 256, 384 or 512 bits: SHA-224, SHA-256, SHA-384, SHA-512, SHA-512/224, SHA-512/256</span></p>
  <p><span style="font-size:larger"><strong>CRC32</strong> – A cyclic redundancy check (CRC) is an error-detecting code often used for detection of accidental changes to data. Encoding the same data string using CRC32 will always result in the same hash output, thus CRC32 is sometimes used as a hash algorithm for file integrity checks. These days, CRC32 is rarely used outside of <a href="/resources/articles/data-compression.html" target="_blank">Zip</a> files and <a href="/resources/articles/essential-ftp-features.html" target="_blank">FTP</a> servers.</p>