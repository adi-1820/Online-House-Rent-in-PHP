<?php
    session_start();
    if(isset($_SESSION['mobile']))
    {
    $mob = $_SESSION['mobile'];
    include("connection.php");
    // $con = mysqli_connect("localhost","root","","rentral") or die("Connection Failed");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Your Property </title>
    <link rel="shortcut icon" href="Img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .d-block{
            width: fit-content;
            height: 400px;
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

    <!-- User House Details -->

        <?php
            $query = "select * from house_details where mobile = '$mob'";
            $res = mysqli_query($con,$query);
        
            if(mysqli_num_rows($res) > 0 )
            { ?>
            <div class="container-fluid bg-light p-4 mt-3">
                <table class="bg-white mt-2 w-100 rounded rounded-4">
            <?php
            while($im = mysqli_fetch_assoc($res)) 
            { ?>
                    <tr>
                        <td align="center" class="p-3 "> 
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>

                            <div class="carousel-inner">
                            <div class="carousel-item active" align="center">
                                <img src="upload/<?=$im['image_1'] ?>" class="d-block " alt="photo">
                            </div>
                            <div class="carousel-item" align="center">
                                <img src="upload/<?=$im['image_2'] ?>" class="d-block " alt="photo">
                            </div>
                            <div class="carousel-item" align="center">
                                <img src="upload/<?=$im['image_3'] ?>" class="d-block" alt="photo">
                            </div>
                            <div class="carousel-item" align="center">
                                <img src="upload/<?=$im['image_4'] ?>" class="d-block" alt="photo">
                            </div>
                            </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-black rounded w-25 h-25" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-black rounded w-25 h-25" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        
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
                    </tr>
                    <tr>
                        <td> <h5> Contact :  <?php echo $im['mobile']; ?> </h5></td>
                    </tr>
                    <tr>
                        <td>
                            <h5> House Name : <?php echo $im['house_name'] ?> </h5>
                        </td>
                    </tr>
                    <tr>
                        <td> <h5>City : <?php echo $im['city']; ?> </h5></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Pincode : <?php echo $im['pincode']; ?></h5>
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <h5> Address : <?php echo $im['address'] ?> </h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5> Area : <?php echo $im['area'] ?>sqft </h5>
                        </td>
                    </tr> 
                    <tr>
                        <td> <h4> Rent : <?php echo $im['rentprice'] ?> </h4></td>
                    </tr>
                    
            <?php } ?>
                </div>
                </table>
            
            <?php }  
            else{ ?>
                <div class="container" align="center">
                    <div class="typed-out"> <h1> Add Your House For Rent </h1>
                    
                    <form action="add_house.php" method="post">
                        <button type="submit" class="btn btn-outline-warning btn-lg"> <h1> + </h1> </button>
                    </form> 
                    </div>
                </div>
            <?php }
            ?>

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
</body>
</html>
<?php
    }
    else
    {
        $em = "First You Have Login !!";
        header("Location: index.php?error=$em");
    }
?>