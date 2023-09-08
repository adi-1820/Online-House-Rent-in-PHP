<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Set New Password </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href=Img/favicon.ico" type="image/x-icon">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-image: url(Img/h1.jpeg);
            background-size: cover;
        }
        .error{
            background-color: whitesmoke;
            color: green;
            margin-top: 30px;
        }
        table{
            margin-top: 100px;
            height: 400px;
            width: 500px;    
            box-shadow: 7px 10px 20px 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post" class="container">

    <table class="border border-5 " align="center">
        <tr>
            <td> <h3 align="center"> Change Password </h3> </td>
        </tr>
        <tr>
            <td align="center">
                <?php
                    if(isset($_GET['error'])) { ?>
                        <p class="error p-3 w-50 rounded border border-3 border-dark" align="center"> <?php echo $_GET['error']; ?> </p>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>    
                <input type="password" class="form-control" name="pass" placeholder="New Password" required maxlength="8">
            </td>
        </tr>

        <tr>
            <td>    
                <input type="password" class="form-control" name="c_pass" placeholder="Re-Enter New Password" required maxlength="8">
            </td>
        </tr>

        <tr>
            <td align="center">
                <button type="submit" name="btn" class="btn btn-outline-primary w-25 mt-5 mb-4 btn-lg btn-block"> Change </button>
            </td>
        </tr>
    </table>
    </form>
    </body>
    </html>
    <?php
        session_start();

        if(isset($_POST['btn']))
        {
        $mobile = $_SESSION['mobile'];
        $pass = $_POST['pass'];
        $c_pass = $_POST['c_pass'];

        // $con = mysqli_connect("localhost","root","","rentral") or die("Connection Failed");
        include("connection.php");
        if($pass === $c_pass)
        {
            $sql = "update registeration set pass = '$pass',c_pass = '$c_pass' where mobile = '$mobile'";

            $res = mysqli_query($con, $sql);
            
            if($res)
            {
                $em = "Password Updated Login Here";
                header ("Location: index.php?error=$em");
            }   
        }
        else{
            $em = "Both Password Must Same";
            header ("Location: forgot_pass_change.php?error=$em");
        }
        }
    ?>
</body>
</html>