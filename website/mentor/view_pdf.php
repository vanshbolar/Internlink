<?php

$con = mysqli_connect("localhost", "root", "", "internlink");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<?php



if(isset($_GET['id'])) {

    $id = mysqli_real_escape_string($con, $_GET['id']);


    $query = "SELECT file_name, file_content FROM reports WHERE id = '$id'";
    $result = mysqli_query($con, $query);


    if($result) {

        $row = mysqli_fetch_assoc($result);


        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . $row['file_name'] . '"');


        echo $row['file_content'];
    } else {

        echo "Error fetching PDF content.";
    }
} else {

    echo "No PDF ID provided.";
}
?>

