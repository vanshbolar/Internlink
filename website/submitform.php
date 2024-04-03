<?php
// Include your database connection file
include('internlink.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $name = $_POST["name"];
    $regno = $_POST["regno"];
    $mentor_id = $_POST["mentor"];
    
    // File upload handling
    $fileName = $_FILES['pdf_file']['name'];
    $fileTmpName = $_FILES['pdf_file']['tmp_name'];
    $pdfContent = file_get_contents($fileTmpName);
   
    // Prepare and execute the SQL statement
    $query = "INSERT INTO report (name, regno, mentor_id, file_name, file_content) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($query);
    // Bind parameters
    $stmt->bind_param("siiss", $name, $regno, $mentor_id, $fileName, $pdfContent);
    
    if ($stmt->execute()) {
        echo "Report submitted successfully.";
    } else {
        echo "Error submitting report: " . $stmt->error;
    }
} else {
    echo "Error: Form submission method not POST.";
}
?>