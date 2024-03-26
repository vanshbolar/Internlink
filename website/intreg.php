<?php

include('./internlink.php');




if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $regno = $_POST['regno'];
    $email = $_POST['email'];
    $stream = $_POST['stream'];
    $mentor = $_POST['mentor'];
    $cname = $_POST['cname'];

    $insert_query = mysqli_query($con,"INSERT INTO intreg (name, regno, email, stream, mentor, cname)); 
    VALUES ('$name', '$regno', '$email', '$stream', '$mentor', '$cname')");
   

    if($insert_query){
        echo "<script>alert('Submitted succesfully')</script>";
        header('location:./comp.php');
    }
    else{
        $_SESSION['status'] = "DATA NOT ADDED SUCCESFULLY";
        header('location:./comp.php');
    }

}
?>