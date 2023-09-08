<?php session_start(); 
  if(isset($_SESSION['mobile']))
  {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Relax & Rent </title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg sticky-top p-3">
        <div class="container rounded rounded-5 p-3">
            <a href="home.php" class="navbar-brand">
                <img src="Img/Relax & rent.gif" alt="logo" width="70">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="home.php"> Home </a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link active" href="add_house.php"> Add Property </a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link active" href="find_house.php"> Find Property </a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link active" href="registeration.php"> Login/Registration </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid  mt-2 d-flex">
    <div class="container">
      <h3 class="d-flex justify-content-center">
        <img src="Img/favicon.ico" alt="logo" width="50">
        <?php 
          echo "&nbsp;"."Welcome ". $_SESSION['name']; ?>
      </h3>
    </div>  
    <div class="container">
    <form action="index.php" method="post" class=" d-flex justify-content-center">
        <button type="submit" name="logout" class="btn btn-success w-25"> Logout </button>
        <?php if(isset($_POST['logout'])) { session_destroy(); } ?>
    </form>
    </div>
      
    </div>
    <br>

    <!-- Slider -->
    <div class="container-fluid">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active" align="center">
            <img src="Img/slider1.gif" class="d-block " alt="photo">
          </div>
          <div class="carousel-item" align="center">
            <img src="Img/slider2.gif" class="d-block w-50" alt="photo">
          </div>
          <div class="carousel-item" align="center">
            <img src="Img/slider3.gif" class="d-block w-50" alt="photo">
          </div>
          <div class="carousel-item" align="center">
            <img src="Img/slider4.gif" class="d-block w-50" alt="photo">
          </div>
        </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bg-black rounded w-25 h-25 mt-5" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon bg-black rounded w-25 h-25 mt-5" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
  </div>

      <!-- Element -->
      <table class="container-fluid bg-white mt-5 mb-5 rounded rounded-5">
        <tr>
          <td class="p-5" height="300">
            <div class="container rounded rounded-5 w-75 h-100 shadow shadow-lg " align="center">
              <a href="add_house.php">
              <img src="Img/home.png" alt="Home Logo" class="w-25">
              </a>
              <br> <br>
              <h3 class="h3"> To Add House For Rent </h3>
            </div>
            
          </td>

          <td class="p-5" height="300">
            <div class="container rounded rounded-5 w-75 h-100 shadow shadow-lg" align="center">
              <a href="find_house.php">
                <img src="Img/home.png" alt="Home Logo" class="w-25">
              </a>
              <br> <br>
              <h3> To Find House For Rent </h3>
            </div>
          </td>
        </tr>
        </table>

      <!-- Footer -->
      <footer class="footer container-fluid bg-dark text-white">
        <table class="container">
          <tr>
            <td> <img src="Img/logo.png" alt="Logo" width="180" class="p-3"></td>
            <td>
              <h4> Contanct us </h4> 
              <table>
                <tr class="f-el">
                  <td align="center"> <img src="Img/mail.png" alt="mail logo" width="40"></td>
                  <td> &nbsp; &nbsp; housing2023@gmail.com </td>
                </tr>
                <tr class="f-el">
                  <td align="center"> <img src="Img/cnct.png" alt="contact logo" width="35"></td>
                  <td> &nbsp; &nbsp; +91 9574802822, &nbsp; +91 8758956680 </td>
                </tr>
                <tr  class="f-el">
                  <td align="center"> <img src="Img/maps.jpg" alt="maps logo" width="25"></td>
                  <td> &nbsp; &nbsp; Porbanadar 360 575, India </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </footer>
</body>
</html>

<?php
  }
  else
  {
    // session_destroy();
    $em = "First You Have Login !!";
    header("Location: index.php?error=$em"); 
  }
?>