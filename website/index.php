<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>


<?php
    // include header.php file
    include ('./header.php');
?>

<?php

    /*  include banner area  */
        include ('./banner.php');

?>

<?php
// include footer.php file
include ('./footer.php');
?>