<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Forgot Password </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="Img/favicon.ico" type="image/x-icon">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-image: url(Img/Reg1.jpg);
            background-size: cover;
        }
        table{
            margin-top: 100px;
            width: 350px;
            height: 400px;
            box-shadow: 7px 10px 5px 10px #888888;
        }
        h3{
            font-family:'Courier New', Courier, monospace;
            font-weight: bold;
            color: darkblue;
        }
        .form-control{
            margin-top: 10px;
            width: 92%;
            margin-left: 10px;
            height: 50px;
        }
        .error{
            background-color: whitesmoke;
            color: green;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<form class="container" method="post" action="">
        <table class="border bg-white w-50" align="center">
            <tr>
                <td align="center" class="ml-5"> <h4> Forgot Password </h4> </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <?php
                        if(isset($_GET['error'])) { ?>
                            <p class="error p-3 w-50 rounded border border-3 border-dark" align="center"> <?php echo $_GET['error']; ?> </p>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" > <h3> Enter Registered Mobile No. : </h3> </td>
            </tr>
            
            <tr>
                <td colspan="2">
                    <input type="text" name="mobile" class="form-control" placeholder="Mobile No." maxlength="10">
                </td>
            </tr>

            <tr>
                <td align="center" colspan="2">
                    <button type="submit" name="btn" class="btn btn-outline-primary w-25 mt-5 mb-4 "> Submit </button>
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
        $_SESSION['mobile'] = $_POST['mobile'];
        $mobile = $_POST['mobile'];

        // $con = mysqli_connect("localhost","root","","rentral") or die("Connection Failed");
        include("connection.php");
        $sql = "select * from registeration where mobile = '$mobile'";

        $res = mysqli_query($con, $sql);

        if(mysqli_num_rows($res) === 1)
        {
            header ("Location: forgot_pass_valid.php");
        }
        else{
            $em = "You Are Not Registered !!";
            header ("Location: forgot_pass.php?error=$em");
        }
    }
?>