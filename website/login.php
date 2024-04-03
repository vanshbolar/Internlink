<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="./login.css" />
<head>
<style>

</style>


</head>

<body>
<?php
require('internlink.php');
session_start();
// If form submitted, insert values into the database.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    // Check students and admins table
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        $_SESSION['usertype'] = $row['usertype'];

        if ($_SESSION['usertype'] == 'user') {
            header("Location: ./index.php");
            exit();
        } elseif ($_SESSION['usertype'] == 'admin') {
            header("Location: ./admin/includes/index.php");
            exit();
        }
    }

    // Check mentors table
    $sql = "SELECT * FROM mentors WHERE username='$username' AND password='$password'";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: ./mentor/index.php");
        exit();
    }

    // If no match found, display error
    $error = "Invalid username or password";
}
?>
<br>
	<nav class="container" style="top: 10px; width:100%;">
		<div class="nav-head" style="width:auto ;"><marquee direction="right">WELCOME TO INTERNLINK</marquee></div>
	  </nav>

<div class="form-box">
    <div class="header-text">Login Form
    </div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<br><br>
<input class="button" name="submit" type="submit" value="Login" />
</form>
<p style="color: white;">Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php if(isset($error)) { echo $error; } ?>
</body>
</html>