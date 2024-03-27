<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $regno = $_POST['regno'];
    $email = $_POST['email'];
    $stream = $_POST['stream'];
    $cname = $_POST['cname'];

    // Connect to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "internlink";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO `intreg` (name, regno, email, stream, cname) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $regno, $email, $stream, $cname);

    // Execute SQL statement
    $stmt->execute();

    echo "Registration info submitted successfully";

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If not submitted through POST method, redirect to the form page
    header("Location: comp.php");
    exit;
}
header("Location: comp.php");
exit;
?>