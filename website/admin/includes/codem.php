<?php include('./dbconfig/dbconfig.php');?>
<?php


if(isset($_POST['save_btn']))
{
    $id=$_POST['id'];
    $username=$_POST['username'];
    $stream=$_POST['stream'];
    $password=$_POST['password'];

    $insert_query = "INSERT INTO mentorr (id,username,stream,password) VALUES('$id','$username','$stream','$password')";
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
    $id=$_POST['id'];
    $username=$_POST['username'];
    $stream=$_POST['stream'];
    $password=$_POST['password'];

    $update_query = "UPDATE mentorr SET username='$username', stream= '$stream', password='$password' WHERE id='$id'";
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
    $id=$_POST['id'];
    $username=$_POST['username'];
    $stream=$_POST['stream'];
    $password=$_POST['password'];

    $delete_query = "DELETE FROM mentorr WHERE id='$id'";
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
