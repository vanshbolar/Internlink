<?php include('./dbconfig/dbconfig.php');?>
<?php


if(isset($_POST['save_btn']))
{
    $iname=$_POST['iname'];
    $cimage=$_POST['cimage'];

    $insert_query = "INSERT INTO `company` (iname,cimage) VALUES('$iname','$cimage')";
    $insert_query_run = mysqli_query($connection,$insert_query);

    if($insert_query_run){
        $_SESSION['status'] = "DATA ADDED SUCCESFULLY";
        header('location:./indexc.php');
    }
    else{
        $_SESSION['status'] = "DATA NOT ADDED SUCCESFULLY";
        header('location:./insertc.php');
    }

}


if(isset($_POST['update_btn']))
{
    $cid=$_POST['cid'];
    $iname=$_POST['iname'];
    $cimage=$_POST['cimage'];

    $update_query = "UPDATE `company` SET iname='$iname', cimage= '$cimage' WHERE cid='$cid'";
    $update_query_run = mysqli_query($connection,$update_query);

    if($update_query_run){
        $_SESSION['status'] = "DATA UPDATED SUCCESFULLY";
        header('location:./indexc.php');
    }
    else{
        $_SESSION['status'] = "UPDATE UNSUCCESFULLY";
        header('location:./insertc.php');
    }

}


if(isset($_POST['delete_btn']))
{
    $cid=$_POST['cid'];
    $iname=$_POST['iname'];
    $cimage=$_POST['cimage'];

    $delete_query = "DELETE FROM `company` WHERE cid='$cid'";
    $delete_query_run = mysqli_query($connection,$delete_query);

    if($delete_query_run){
        $_SESSION['status'] = "DATA DELETED SUCCESFULLY";
        header('location:./indexc.php');
    }
    else{
        $_SESSION['status'] = "DELETE UNSUCCESFULL";
        header('location:./insertc.php');
    }

}
