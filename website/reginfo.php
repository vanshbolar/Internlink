<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $regno = $_POST['regno'];
    $email = $_POST['email'];
    $stream = $_POST['stream'];
    $cname = $_POST['cname'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "internlink";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO `intregs` (name, regno, email, stream, cname) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $regno, $email, $stream, $cname);

    $success = $stmt->execute();

    if ($success) {
        header("Location: success.php");
    } else {
        header("Location: error.php");
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: comp.php");
    exit;
}
?>
