<?php include('./dbconfig/dbconfig.php');?>
<?php


if(isset($_POST['save_btn'])) {
    $cid = mysqli_real_escape_string($connection, $_POST['cid']);
    $cname = mysqli_real_escape_string($connection, $_POST['cname']);
    $cdesc = mysqli_real_escape_string($connection, $_POST['cdesc']);
    $idesc = mysqli_real_escape_string($connection, $_POST['idesc']);
    $duration = mysqli_real_escape_string($connection, $_POST['duration']);
    $time = mysqli_real_escape_string($connection, $_POST['time']);


    $insert_query = "INSERT INTO `intinfos` (cid, cname, cdesc, idesc, duration, time) VALUES ('$cid', '$cname', '$cdesc', '$idesc', '$duration', '$time')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if($insert_query_run){
        $_SESSION['status'] = "DATA ADDED SUCCESSFULLY";
        header('location:./indexi.php');
        exit(); 
    }
    else{
        $_SESSION['status'] = "DATA NOT ADDED SUCCESSFULLY";
        header('location:./inserti.php');
        exit(); 
    }
}


if(isset($_POST['update_btn']))
{
    $cid=$_POST['cid'];
    $cname=$_POST['cname'];
    $cdesc=$_POST['cdesc'];
    $idesc=$_POST['idesc'];
    $duration=$_POST['duration'];
    $time=$_POST['time'];

    $update_query = "UPDATE intinfos SET cname='$cname', cdesc= '$cdesc', idesc='$idesc', duration='$duration', time='$time' WHERE cid='$cid'";
    $update_query_run = mysqli_query($connection,$update_query);

    if($update_query_run){
        $_SESSION['status'] = "DATA UPDATED SUCCESFULLY";
        header('location:./indexi.php');
    }
    else{
        $_SESSION['status'] = "UPDATE UNSUCCESFULLY";
        header('location:./inserti.php');
    }

}


if(isset($_POST['delete_btn']))
{
    $cid=$_POST['cid'];
    $cname=$_POST['cname'];
    $cdesc=$_POST['cdesc'];
    $idesc=$_POST['idesc'];
    $duration=$_POST['duration'];
    $time=$_POST['time'];

    $delete_query = "DELETE FROM intinfos WHERE cid='$cid'";
    $delete_query_run = mysqli_query($connection,$delete_query);

    if($delete_query_run){
        $_SESSION['status'] = "DATA DELETED SUCCESFULLY";
        header('location:./indexi.php');
    }
    else{
        $_SESSION['status'] = "DELETE UNSUCCESFULL";
        header('location:./inserti.php');
    }

}
