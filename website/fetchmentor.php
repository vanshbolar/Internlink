
<?php

include('./internlink.php');
?>
<?php
// Fetch mentors based on the selected stream
if (isset($_GET['stream'])) {
    $stream = $_GET['stream'];
    $sql = "SELECT username FROM mentor WHERE stream = '$stream'";
    $result = $con->query($sql);

    $mentors = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $mentors[] = $row['username'];
        }
    }

    // Return mentor options as JSON
    echo json_encode($mentors);
}


?>
