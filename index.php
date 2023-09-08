<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="Img/favicon.ico" type="image/x-icon">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-image: url(Img/bg1.jpg);
            background-size: cover;
        }
        .container{
            margin-top: 50px;
        }
        .row{
            margin-top: 50px;
        }
        .error{
            background-color: whitesmoke;
            color: green;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <form class="container-fluid" action="login_valid.php" method="POST">

        <table class="container w-50 shadow-lg bg-white rounded rounded-5">
            <tr>
                <td align="center"> <h3> 
                    <img src="Img/favicon.ico" alt="Logo" width="70" class="p-2"> Relax & Rent </h3> </td>
            </tr>
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
            <tr class="row">
                <td align="center">
                    <input type="text" name="mobile" class="form-control w-50" placeholder="Email ID/Phone NO.">
                </td>
            </tr>
            <tr class="row">
                <td align="center" class="mt-10">
                    <input type="password" name="pass" class="form-control w-50" placeholder="Password">
                    <br> 
                    <a href="forgot_pass.php"> Forgot Password ?</a>
                </td>
            </tr>
            
            <tr>
                <td colspan="2" align="center">
                    <button type="submit" class="btn btn-outline-primary w-25 mt-5 mb-4"> Login </button>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <p> Create new Account <a href="registeration.php"> Registration here</a> </p>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>