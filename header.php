<?php
session_start();

?>

<script src="https://kit.fontawesome.com/986211ef94.js" crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg navbar-dark " style=" background-color:#343131;">
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark " style=" background: linear-gradient(120deg,#cf66b1, #bc0b8a);"  > -->
  <div class="container-fluid">
    <a class="navbar-brand" href="../HomePage/index.php"><img src="../Images1/logo.png" style="width: 25%;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php

    if (isset($_SESSION['user'])) { 
     ?>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto mb-2 mb-lg-0">
        <a class="nav-link active text-center" aria-current="page" href="../AboutMePage/aboutMe.php"><i class="fa-solid fa-address-card"></i> About me</a>
        <a class="nav-link active text-center" aria-current="page" href="../BlogPage/blog.php"><i class="fa-solid fa-address-card"></i> Blog</a>
        <a class="nav-link active text-center" aria-current="page" href="../AcountPage/logout.php"><i class="fa-solid fa-right-to-bracket"></i> Welcome, <?= $_SESSION['user']['username']?></a>
        <a class="nav-link active text-center" aria-current="page" href="../ProductsPage/product.php"><i class="fa-solid fa-wand-magic-sparkles"></i> Products</a>
      </div>
    </div>
    
    <?php

    } else  { ?>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto mb-2 mb-lg-0">
          <a class="nav-link active text-center" aria-current="page" href="../AboutMePage/aboutMe.php"><i class="fa-solid fa-address-card"></i> About me</a>
          <a class="nav-link active text-center" aria-current="page" href="../BlogPage/blog.php"><i class="fa-solid fa-address-card"></i> Blog</a>
          <a class="nav-link active text-center" aria-current="page" href="../AcountPage/login.php"><i class="fa-solid fa-right-to-bracket"></i> Login/Register</a>
          <a class="nav-link active text-center" aria-current="page" href="../ProductsPage/product.php"><i class="fa-solid fa-wand-magic-sparkles"></i> Products</a>
        </div>
      </div>
    <?php
    }
    ?>




</nav>