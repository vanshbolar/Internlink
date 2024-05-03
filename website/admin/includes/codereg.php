<?php include('./dbconfig/dbconfig.php');?>
<?php



if(isset($_POST['delete_btn']))
{
    $id=$_POST['id'];
    $username=$_POST['username'];
    $stream=$_POST['stream'];
    $password=$_POST['password'];

    $delete_query = "DELETE FROM intregs WHERE id='$id'";
    $delete_query_run = mysqli_query($connection,$delete_query);

    if($delete_query_run){
        $_SESSION['status'] = "DATA DELETED SUCCESFULLY";
        header('location:./indexreg.php');
    }
    else{
        $_SESSION['status'] = "DELETED UNSUCCESFULL";
        header('location:./indexreg.php');
    }

}