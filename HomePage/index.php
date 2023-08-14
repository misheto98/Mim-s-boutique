<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mim's boutique</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../header.css">
<link rel="stylesheet" href="../footer.css">

<?php include("../header.php"); ?>


<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3500">
        <img src="../Images1/Screenshot_2.png" class="d-block w-100" alt="..." style="height:auto; width:100%;">
        <div class="carousel-caption d-none d-md-block">
          <h2>Want to feel really beautiful? </h2>
          <p style="font-size: 18px;">Take care of yourself tony now.Feel the beautiful in you with MIM'S BOUTIQUE</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3500">
      <img src="../Images1/Screenshot_3.png" class="d-block w-100" alt="..." style="height:auto; width:80%;">
      <div class="carousel-caption d-none d-md-block ">
        <!-- <h2> You want to choose a desired destination?</h2>
        <p>Make the trip of your life. You have the opportunity to do it right now</p> -->
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3500">
      <img src="../Images1/Screenshot_4.png" class="d-block w-100" alt="..." style="height:auto; width:100%;">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h2> You want to choose a desired destination?</h2>
        <p>Make the trip of your life. You have the opportunity to do it right now</p> -->
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  







  <?php include("../footer.php"); ?>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>