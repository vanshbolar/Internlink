<?php include('./dbconfig/dbconfig.php');?>
<?php


if(isset($_POST['save_btn']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $insert_query = "INSERT INTO user (username,email,password) VALUES('$username','$email','$password')";
    $insert_query_run = mysqli_query($connection,$insert_query);

    if($insert_query_run){
        $_SESSION['status'] = "DATA ADDED SUCCESFULLY";
        header('location:./index.php');
    }
    else{
        $_SESSION['status'] = "DATA NOT ADDED SUCCESFULLY";
        header('location:./insert.php');
    }

}


if(isset($_POST['update_btn']))
{
    $id=$_POST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $update_query = "UPDATE user SET username='$username', email= '$email', password='$password' WHERE id='$id'";
    $update_query_run = mysqli_query($connection,$update_query);

    if($update_query_run){
        $_SESSION['status'] = "DATA UPDATED SUCCESFULLY";
        header('location:./index.php');
    }
    else{
        $_SESSION['status'] = "UPDATE UNSUCCESFULLY";
        header('location:./insert.php');
    }

}


if(isset($_POST['delete_btn']))
{
    $id=$_POST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $delete_query = "DELETE FROM user WHERE id='$id'";
    $delete_query_run = mysqli_query($connection,$delete_query);

    if($delete_query_run){
        $_SESSION['status'] = "DATA DELETED SUCCESFULLY";
        header('location:./index.php');
    }
    else{
        $_SESSION['status'] = "DELETE UNSUCCESFULL";
        header('location:./insert.php');
    }

}
