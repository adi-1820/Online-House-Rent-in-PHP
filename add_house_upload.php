<?php
    session_start();
    // $con = mysqli_connect("localhost","root","","rentral") or die("Connection Failed");
    include("connection.php");
    
    $mobile = $_SESSION['mobile'];

    $house_name = $_POST['house_name'];
    $city = $_POST['city'];
    $rooms = $_POST['rooms'];
    $rent = $_POST['rent'];
    $area = $_POST['area'];
    $pincode = $_POST['pincode'];
    $address = $_POST['address'];

    // mkdir($mobile);

    if(!($rooms>0 and $rent>0 and $area>0))
    {
        $em = "Please Enter Valid Data !!";
        header("Location: add_house.php?error=$em");
    }
    else{
        $sql = "insert into house_details(mobile,house_name,city,rooms,rentprice,area,pincode,address) values($mobile,'$house_name','$city',$rooms,$rent,$area,'$pincode','$address')";
        $result = mysqli_query($con, $sql) or die(header("Location: add_house.php?error=Something Went Wrong!!!"));

        if(isset($_FILES['image1']))
        {
            $img_name = $_FILES['image1']['name'];
            $img_size = $_FILES['image1']['size'];
            $temp_name = $_FILES['image1']['tmp_name'];
            $error = $_FILES['image1']['error'];
    
            if($error === 0)
            {
                if($img_size > 10000000)
                {
                    $em = "Image is too large !!!";
                    header("Location: add_house.php?error=$em");
                }
                else
                {
                    $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ext_lc = strtolower($img_ext);
    
                    $allow_ext = array("jpg", "jpeg", "png", "ico");
    
                    if(in_array($img_ext_lc,$allow_ext))
                    {
                        $new_img_name = uniqid("IMG-", true). "." . $img_ext_lc;
                        
                        $img_path = "upload/".$new_img_name;
                        move_uploaded_file($temp_name,$img_path);
                        
                        $query = "update house_details set image_1 = '$new_img_name' where mobile='$mobile'";
    
                        $result = mysqli_query($con,$query) or die("Not Uploded");
                    }
                    else
                    {
                        $em = "You can't upload this type of image !!";
                        header("Location: add_house.php?error=$em");
                    }   
                }
            }
            else{
                $em = "Unknown Error Occured !!!";
                header("Location: add_house.php?error=$em");
            }
        }
    
        if(isset($_FILES['image2']))
        {
            $img_name = $_FILES['image2']['name'];
            $img_size = $_FILES['image2']['size'];
            $temp_name = $_FILES['image2']['tmp_name'];
            $error = $_FILES['image2']['error'];
    
            if($error === 0)
            {
                if($img_size > 10000000)
                {
                    $em = "Image is too large !!!";
                    header("Location: add_house.php?error=$em");
                }
                else
                {
                    $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ext_lc = strtolower($img_ext);
    
                    $allow_ext = array("jpg", "jpeg", "png", "ico");
    
                    if(in_array($img_ext_lc,$allow_ext))
                    {
                        $new_img_name = uniqid("IMG-", true). "." . $img_ext_lc;
                        
                        $img_path = "upload/".$new_img_name;
                        move_uploaded_file($temp_name,$img_path);
    
                        $query = "update house_details set image_2 = '$new_img_name' where mobile='$mobile'";
    
                        $result = mysqli_query($con,$query) or die("Not Uploded");
                    }
                    else
                    {
                        $em = "You can't upload this type of image !!";
                        header("Location: add_house.php?error=$em");
                    }   
                }
            }
            else{
                $em = "Unknown Error Occured !!!";
                header("Location: add_house.php?error=$em");
            }
        }
    
        if(isset($_FILES['image3']))
        {
            $img_name = $_FILES['image3']['name'];
            $img_size = $_FILES['image3']['size'];
            $temp_name = $_FILES['image3']['tmp_name'];
            $error = $_FILES['image3']['error'];
    
            if($error === 0)
            {
                if($img_size > 10000000)
                {
                    $em = "Image is too large !!!";
                    header("Location: add_house.php?error=$em");
                }
                else
                {
                    $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ext_lc = strtolower($img_ext);
    
                    $allow_ext = array("jpg", "jpeg", "png", "ico");
    
                    if(in_array($img_ext_lc,$allow_ext))
                    {
                        $new_img_name = uniqid("IMG-", true). "." . $img_ext_lc;
                        
                        $img_path = "upload/".$new_img_name;
                        move_uploaded_file($temp_name,$img_path);
    
                        $query = "update house_details set image_3 = '$new_img_name' where mobile='$mobile'";
    
                        $result = mysqli_query($con,$query) or die("Not Uploded");
                    }
                    else
                    {
                        $em = "You can't upload this type of image !!";
                        header("Location: add_house.php?error=$em");
                    }   
                }
            }
            else{
                $em = "Unknown Error Occured !!!";
                header("Location: add_house.php?error=$em");
            }
        }
    
        if(isset($_FILES['image4']))
        {
            $img_name = $_FILES['image4']['name'];
            $img_size = $_FILES['image4']['size'];
            $temp_name = $_FILES['image4']['tmp_name'];
            $error = $_FILES['image4']['error'];
    
            if($error === 0)
            {
                if($img_size > 10000000)
                {
                    $em = "Image is too large !!!";
                    header("Location: add_house.php?error=$em");
                }
                else
                {
                    $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ext_lc = strtolower($img_ext);
    
                    $allow_ext = array("jpg", "jpeg", "png", "ico");
    
                    if(in_array($img_ext_lc,$allow_ext))
                    {
                        $new_img_name = uniqid("IMG-", true). "." . $img_ext_lc;
                        
                        $img_path = "upload/".$new_img_name;
                        move_uploaded_file($temp_name,$img_path);
    
                        $query = "update house_details set image_4 = '$new_img_name' where mobile='$mobile'";
    
                        $result = mysqli_query($con,$query) or die("Not Uploded");
                        
                    }
                    else
                    {
                        $em = "You can't upload this type of image !!";
                        header("Location: add_house.php?error=$em");
                    }   
                }
            }
            else{
                $em = "Unknown Error Occured !!!";
                header("Location: add_house.php?error=$em");
            }
        }
        header("Location: user_house.php?");
    }
    
?>