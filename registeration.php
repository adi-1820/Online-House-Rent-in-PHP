<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration </title>
    <link rel="shortcut icon" href="Img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        .btn{
            margin-top: 20px;
            width: 20%;
        }
        body{
            background-image: url(Img/Reg1.jpg);
            background-size: cover;
        }
        .error{
            background-color: whitesmoke;
            color: green;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <form class="container-fluid" action="registeration_valid.php" method="POST">
    
        <h3 align="center" class="mt-3"> Registeration Form </h3> 
            <table class="container shadow-lg p-3 mt-5 bg-white rounded" cellpadding="10">
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
                        <input type="text" class="form-control" name="Name" placeholder="Full Name" required>
                    </td>
                    <td>
                        <input type="email" class="form-control" name="Email" placeholder="E-Mail ID" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" class="form-control" name="Mobile" placeholder="Mobile/Phone Number" required maxlength="10">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="City" placeholder="City Name" required>  
                    </td>
                </tr>

                <tr>
                    <td>
                        <select class="form-select" name="Gender" required>
                            <option value=""> Select Gender </option>
                            <option value="male"> Male </option>
                            <option value="female"> Female </option>
                            <option value="other"> Others </option>
                        </select>
                    </td>
                    <td>
                        <select class="form-select" name="Movie" required>
                            <option value=""> Your Favourite Movie ? </option>
                            <option value="Devdas"> Devdas </option>
                            <option value="Titanic"> Titanic </option>
                            <option value="Baby"> Baby </option>
                            <option value="RRR"> RRR </option>
                            <option value="Namak Halal"> Namak Halal </option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <select class="form-select" name="Actor" required>
                            <option value=""> Your Favourite Actor ? </option>
                            <option value="Amitabh Bachchan"> Amitabh Bachchan </option>
                            <option value="Akshay Kumar"> Akshay Kumar </option>
                            <option value="Anil Kapoor"> Anil Kapoor </option>
                            <option value="Kartik Aryan"> Kartik Aryan </option>
                            <option value="Paresh Rawal"> Paresh Rawal </option>
                        </select>
                    </td>
                    
                    <td>
                        <select class="form-select" name="Color" required>
                            <option value=""> Your Favourite Color ? </option>
                            <option value="Red"> Red </option>
                            <option value="Orange"> Orange </option>
                            <option value="White"> White </option>
                            <option value="Black"> Black </option>
                            <option value="Blue"> Blue </option>
                        </select>
                    </td>
                </tr>

                <tr>
                    
                    <td>    
                        <input type="password" class="form-control" name="pass" placeholder="Password" required maxlength="8" >
                    </td>
                
                    <td>    
                        <input type="password" class="form-control" name="c_pass" placeholder="Confirm Password" required maxlength="8" >
                    </td>
        
                </tr>
    
                <tr>
                    <td align="center" colspan="2">
                        <button type="submit" class="btn btn-outline-primary btn-block"> Register </button>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        Already Have an Account <a href="index.php"> Login Here </a>
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>