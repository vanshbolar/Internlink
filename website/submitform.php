
<?php

include('./internlink.php');
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $stream = $_POST['stream'];
    $mentor = $_POST['mentor'];

    // Handle file upload
    $file_name = $_FILES['pdf_file']['name'];
    $file_tmp = $_FILES['pdf_file']['tmp_name'];
    $file_content = file_get_contents($file_tmp);
    
    // Prepare SQL statement
    $stmt = $con->prepare("INSERT INTO  report (name, stream, mentor, file_name, file_content) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $stream, $mentor, $file_name, $file_content);

    // Execute SQL statement
    if ($stmt->execute() === TRUE) {
        echo "New record inserted successfully";
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
}
?>

