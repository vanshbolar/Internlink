<?php
// Include your database connection file
include('internlink.php');

if (isset($_GET['stream'])) {
    $stream = $_GET['stream'];
    $query = "SELECT * FROM mentors WHERE stream = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $stream);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $mentors = array();
    while ($row = $result->fetch_assoc()) {
        $mentors[] = array(
            'id' => $row['id'],
            'username' => $row['username']
        );
    }

    echo json_encode($mentors);
}
?>
