<?php
    session_start();

    $mobile = $_POST['mobile'];
    $pass = $_POST['pass'];
    


    // $con = mysqli_connect("localhost","root","","rentral") or die("Connection Failed");
    include("connection.php");
    $query = "select * from registeration where mobile = '$mobile' or email = '$mobile' ";

    $res =  mysqli_query($con,$query);
    
    if(mysqli_num_rows($res) === 1)
    {
        $row = mysqli_fetch_row($res);

        if(($row[2] == $mobile || $row[1] == $mobile) && $row[3] === $pass)
        {
            $_SESSION['name'] = $row[0];
            $_SESSION['mobile'] = $row[2];
            header("Location: home.php");
        }
        else{
            $em = "Incorrect ID or Password !!";
            header ("Location: index.php?error=$em");
        }
    }
    else{
        $em = "You Are New Please Registration !!";
        header ("Location: registeration.php?error=$em");
    }
?>