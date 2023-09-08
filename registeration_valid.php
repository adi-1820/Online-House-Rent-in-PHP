<?php
    session_start();
    $_SESSION['email'] = $_POST['Email'];
    $_SESSION['mobile'] = $_POST['Mobile'];

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $mobile = $_POST['Mobile'];
    $city = $_POST['City'];
    $gender = $_POST['Gender'];
    $movie = $_POST['Movie'];
    $actor = $_POST['Actor'];
    $color = $_POST['Color'];
    $pass = $_POST['pass'];
    $c_pass = $_POST['c_pass'];

    // $con = mysqli_connect("localhost","root","","rentral") or die("Connection Failed");
    include("connection.php");
    
        if(preg_match('/^[A-z ]*$/', $name))
        { }
        else
        {
            $em="Please Enter Valid Name!! ";
            header ("Location: registeration.php?error=$em");
        }
    if($pass === $c_pass)
    {
        $sql = "insert into registeration values('$name','$email','$mobile','$pass','$c_pass','$city','$gender','$movie','$actor','$color')";
    }
    else{
        $em = "Both Password are Different Please Check !!";
        header ("Location: registeration.php?error=$em");
    }

    $res = mysqli_query($con,$sql);

    if($res)
    {
        $em = "You Are Registered Successfully Log in !!";
        header ("Location: index.php?error=$em");
    }
    else
    {
        $em = "Registration Not Complete Please Complete !!!";
        header ("Location: registeration.php?error=$em");
    }
?>