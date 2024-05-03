<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <script>
        swal("Registration Successful!", "", "success").then(() => {
            window.location.href = "index.php"; // Redirect to index.php after the alert is closed
        });
    </script>
</body>
</html>
