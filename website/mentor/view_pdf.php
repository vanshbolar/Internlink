<?php

$con = mysqli_connect("localhost", "root", "", "internlink");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<?php


// Check if an ID parameter is provided in the URL
if(isset($_GET['id'])) {
    // Sanitize the ID parameter to prevent SQL injection
    $id = mysqli_real_escape_string($con, $_GET['id']);

    // Query the database to fetch the PDF content based on the provided ID
    $query = "SELECT file_name, file_content FROM report WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    // Check if the query was successful
    if($result) {
        // Fetch the row containing the PDF content
        $row = mysqli_fetch_assoc($result);

        // Set the appropriate headers for PDF content
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . $row['file_name'] . '"');

        // Output the PDF content
        echo $row['file_content'];
    } else {
        // Display an error message if the query fails
        echo "Error fetching PDF content.";
    }
} else {
    // Display an error message if no ID parameter is provided
    echo "No PDF ID provided.";
}
?>

