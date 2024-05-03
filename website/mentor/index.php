<?php
session_start();

// Check if mentor is logged in, redirect to login page if not
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Database connection
$con = mysqli_connect("localhost", "root", "", "internlink");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// include header.php file
include('./header.php');
?>

<div class="container-fluid py-4">
<h2 class="font-weight-bolder mb-0">Student Report</h2>
</div>

<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
    <!-- Display status message -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong></strong> <?php echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    unset($_SESSION['status']);
}
?>

<div class="card mt-5">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Regno</th>
                    <th scope="col">Report</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch reports associated with the mentor
                $mentor_id = $_SESSION['mentor_id'];
                $fetch_query = "SELECT * FROM reports WHERE mentor_id = $mentor_id";
                $fetch_query_run = mysqli_query($con, $fetch_query);

                if (mysqli_num_rows($fetch_query_run) > 0) {
                    foreach ($fetch_query_run as $row) {
                ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['regno']; ?></td>
                            <td>
                                <?php
                                // Check if file content exists
                                if (!empty($row['file_content'])) {
                                ?>
                                    <!-- Output a link to view/download the PDF file -->
                                    <a href="view_pdf.php?id=<?php echo $row['id']; ?>" target="_blank">View PDF</a>
                                <?php
                                } else {
                                    echo "No PDF available";
                                }
                                ?>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='3'>No reports found</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="position-fixed top-0 end-0 m-3">
    <div class="">
        <a class="btn bg-gradient-danger" href="./logout.php" type="button">Logout</a>
    </div>
</div>
    </div>
</div>
