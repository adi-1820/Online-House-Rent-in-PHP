<?php
    session_start();
    // $mobile = $_SESSION['mobile']; 
    include("connection.php");
    // $con = mysqli_connect("localhost","root","","rentral") or die("Connection Failed");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Find House </title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        .img-fluid{
            height: 150px;
        }
    </style>
</head>
<body>
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

    <!-- Search Section -->
    <div class="container">
        <table>
            <tr>
                <td>
                    <h3> Find in your City </h3>
                </td>
                <td style="padding-left: 130px; " align="center" class="w-75">
                    <form class="d-flex" method="post" action="search_house.php">
                    <input class="form-control me-2 w-100" type="search" name="city" placeholder="Search Your City Name.." aria-label="Search">
                    <button class="btn btn-outline-success w-50" type="submit"> Search </button>
                    </form>
                </td>
            </tr>
        </table>
    </div>

<?php

    // $con = mysqli_connect("localhost","root","","rentral") or die("Connection Failed");

    $_SESSION['search_city'] = $_POST['city'];
    $city = $_SESSION['search_city'];
    ?>

    <!-- Searched Property List -->
    <div class="container bg-primary p-4 mt-3">
    <?php
    
        $query = "select * from house_details where city = '$city'";
        $res = mysqli_query($con,$query);
    
        if(mysqli_num_rows($res) > 0 )
        {
        while($im = mysqli_fetch_assoc($res)) 
        { ?>
            <table class="bg-white mt-5 w-100 rounded rounded-4">
                <tr>
                    <td align="center" class="p-3 " rowspan="5"> 
                        <img src="upload/<?=$im['image_1'] ?>" class="img-fluid">
                    </td>
                </tr>
                <tr>
                    <td> <h2>
                        Owner : 
                        <?php 
                            $mob = $im['mobile']; 
                            $query = "select name from registeration where mobile='$mob'";
                            $result1 = mysqli_query($con,$query) or die("Not Done");
                            while($row = mysqli_fetch_assoc($result1))
                            { echo $row['name']; } 
                        ?> </h2>
                    </td>
                    <td align="center">
                            <form action="details_one_house.php" method="post">
                                <a href="details_one_house.php?data=<?php echo $im['id']; ?>" class="btn btn-primary mt-5"> Show Details </a>
                            </form>
                    </td>
                </tr>
                <tr>
                    <td> <h5> Contact :  <?php echo $im['mobile']; ?> </h5></td>
                </tr>
                <tr>
                    <td> <h5>City : <?php echo $im['city']; ?> </h5></td>
                </tr>    
                <tr>
                    <td> <h4> Rent : <?php echo $im['rentprice'] ?> </h4></td>
                </tr>
            </table>
        <?php }
        } 
        else{ ?>
            <div class="container notice" align="center">
                <h2> Sorry Not Found In Your City !!! </h2>
            </div>    
        <?php 
        } ?>
    </div>

    <!-- Footer -->
    <footer class="footer container-fluid bg-dark text-white mt-5">
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