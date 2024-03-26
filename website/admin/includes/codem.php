<?php include('./dbconfig/dbconfig.php');?>
<?php


if(isset($_POST['save_btn']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $stream=$_POST['stream'];
    

    $insert_query = "INSERT INTO mentor (username,password,stream) VALUES('$username','$password','$stream')";
    $insert_query_run = mysqli_query($connection,$insert_query);

    if($insert_query_run){
        $_SESSION['status'] = "DATA ADDED SUCCESFULLY";
        header('location:./indexm.php');
    }
    else{
        $_SESSION['status'] = "DATA NOT ADDED SUCCESFULLY";
        header('location:./insertm.php');
    }

}


if(isset($_POST['update_btn']))
{
    $mid=$_POST['mid'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $stream=$_POST['stream'];

    $update_query = "UPDATE mentor SET username='$username', password='$password', stream= '$stream' WHERE mid='$mid'";
    $update_query_run = mysqli_query($connection,$update_query);

    if($update_query_run){
        $_SESSION['status'] = "DATA UPDATED SUCCESFULLY";
        header('location:./indexm.php');
    }
    else{
        $_SESSION['status'] = "UPDATE UNSUCCESFULLY";
        header('location:./insertm.php');
    }

}


if(isset($_POST['delete_btn']))
{
    $mid=$_POST['mid'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $stream=$_POST['stream'];

    $delete_query = "DELETE FROM mentor WHERE mid='$mid'";
    $delete_query_run = mysqli_query($connection,$delete_query);

    if($delete_query_run){
        $_SESSION['status'] = "DATA DELETED SUCCESFULLY";
        header('location:./indexm.php');
    }
    else{
        $_SESSION['status'] = "DELETE UNSUCCESFULL";
        header('location:./insertm.php');
    }

}
