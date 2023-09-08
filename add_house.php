<?php
    session_start();

    if(isset($_SESSION['mobile']))        
    { 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add House </title>
    <link rel="shortcut icon" href="Img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Navigation Bar -->
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

    <!-- Add Property Details -->
    <h1 class="container" align="center"> Add House Details </h1>
    <form action="add_house_upload.php" method="post" class="container-fluid" enctype="multipart/form-data">
        <table class="container table">
            <tr>
                <td colspan="2" align="center">
                    <?php
                        if(isset($_GET['error'])) { ?>
                            <p class="error p-3 w-50 rounded border border-3 border-dark" align="center"> 
                                <?php echo $_GET['error']; ?> 
                            </p>
                    <?php } ?>
                </td>
            </tr>
            
            <tr>
                <td> 
                    <input type="text" name="house_name" placeholder="House Name" class="form-control" required  maxlength="15"> 
                </td>
                <td>
                    <input type="text" name="city" placeholder="City" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="number" name="rooms" placeholder="Total Rooms" class="form-control">
                </td>
                <td>
                    <input type="number" name="rent" placeholder="Rent Price" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="number" name="area" placeholder="Area(in sqft)" class="form-control">
                </td>
                
                <td rowspan="2">
                    <textarea name="address" cols="30" rows="4" placeholder="Address in details..." class="form-control"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="pincode" placeholder="PIN CODE" class="form-control" maxlength="6" size="6">
                </td>
            </tr>
            
            <tr>
                <td colspan="2" align="center">
                    <h3> Upload Images of Your House </h3>
                </td>
            </tr> 
            <!-- Add Image of Your House for rent -->

            <tr>
                <td>
                    <input type="file" name="image1" class="form-control" required>
                </td>
                <td>
                    <input type="file" name="image2" class="form-control" required>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="file" name="image3" class="form-control" required>
                </td>
                <td>
                    <input type="file" name="image4" class="form-control" required>
                </td>
            </tr>


            <tr>
                <td colspan="2" align="center">
                    <button type="submit" class="btn btn-warning w-25"> Add Details </button>
                </td>
            </tr>
        </table>
    </form>

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
        $em = "First You Have Login !!";
        header("Location: index.php?error=$em");
    }
?>