<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Forgot Password Question Answer </title>
    <link rel="shortcut icon" href="Img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-image: url(Img/h1.jpeg);
            background-size: cover;
        }
        table{
            margin-top: 100px;
            width: 600px;
            box-shadow: 7px 5px 20px 10px ;
        }
        h3{
            margin-bottom: 40px;
        }
        .btn{
            margin-top: 40px;
            width: 70%;
            font-size: larger;
        }
        .form-select{
            margin-top: 20px;
            width: 92%;
            margin-left: 20px;
            border-radius: 50px;
        }
        .error{
            background-color: whitesmoke;
            color: green;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <form class="container" method="POST">
        <h2 align="center"> Question Answers </h2>
        <table class="border border-5" align="center">
            <tr>
                <td>
                    <h3 align="center"> Give Below Question's Correct Answers </h3>
                </td>
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
                    <select class="form-select form-select-lg" name="movie" required>
                        <option value=""> Which is Your Favourite Movie ? </option>
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
                    <select class="form-select form-select-lg" name="actor" required>
                        <option value=""> Who is Your Favourite Actor ? </option>
                        <option value="Amitabh Bachchan"> Amitabh Bachchan </option>
                        <option value="Akshay Kumar"> Akshay Kumar </option>
                        <option value="Anil Kapoor"> Anil Kapoor </option>
                        <option value="Kartik Aryan"> Kartik Aryan </option>
                        <option value="Paresh Rawal"> Paresh Rawal </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <select class="form-select form-select-lg" name="color" required>
                        <option value=""> Which is Your Favourite Color ? </option>
                        <option value="Red"> Red </option>
                        <option value="Orange"> Orange </option>
                        <option value="White"> White </option>
                        <option value="Black"> Black </option>
                        <option value="Blue"> Blue </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td align="center">
                    <button type="submit" name="btn" class="btn btn-outline-primary w-25 mt-5 mb-4"> Submit </button>
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
        $movie = $_POST['movie'];
        $actor = $_POST['actor'];
        $color = $_POST['color'];

        // $con = mysqli_connect("localhost","root","","rentral") or die("Connection Failed");
        include("connection.php");
        $sql = "select * from registeration where mobile = '$mobile'";

        $res = mysqli_query($con, $sql);
        
        if(mysqli_num_rows($res) === 1)
        {
            $row = mysqli_fetch_assoc($res);

            if($row['movie'] === $movie && $row['actor'] === $actor && $row['color'] === $color)
            {
                header ("Location: forgot_pass_change.php");
            }
            else{
                $em = "Answers are Wrong";
                header ("Location: forgot_pass_valid.php?error=$em");
            }
        }
        else{
            
        }
    }
?>