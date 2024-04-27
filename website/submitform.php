<?php
// Include your database connection file
include('internlink.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $regno = $_POST["regno"];
    $stream = $_POST["stream"];
    $mentor_id = $_POST["mentor"];
    

    $fileName = $_FILES['pdf_file']['name'];
    $fileTmpName = $_FILES['pdf_file']['tmp_name'];
    $pdfContent = file_get_contents($fileTmpName);
   

    $query = "INSERT INTO reports (name, regno,stream, mentor_id, file_name, file_content) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($query);

    $stmt->bind_param("sisiss", $name, $regno,$stream ,$mentor_id, $fileName, $pdfContent);
    
    if ($stmt->execute()) {
        header("Location: ./dashboard1.php");
    } else {
        echo "Error submitting report: " . $stmt->error;
    }
} else {
    echo "Error: Form submission method not POST.";
}
?>