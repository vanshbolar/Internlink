<?php
// Include your database connection file
include('internlink.php');

// Query to select the file from the database
$query = "SELECT * FROM report WHERE id = ?";
$stmt = $con->prepare($query);
$id = 9; // Provide the ID of the file you want to retrieve
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // File found, fetch the file content
    $row = $result->fetch_assoc();
    $fileName = $row['file_name'];
    $fileContent = $row['file_content'];

    // Set the appropriate HTTP headers
    header('Content-Type: application/pdf');
    header("Content-Disposition: attachment; filename=$fileName");
    
    // Output the file content
    echo $fileContent;
} else {
    echo "File not found.";
}

// Close the database connection
$stmt->close();
$con->close();
?>
