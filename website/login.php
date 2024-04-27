<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="./login.css" />
<head>
<style>
</style>


</head>

<body style="background-color:rgb(33, 33, 33);">
<?php
require('internlink.php');
session_start();
// If form submitted insert values into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);

    // Check students and admins table
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
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


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Check mentors table
        $sql = "SELECT id FROM mentorr WHERE username='$username' AND password='$password'";
        $result = $con->query($sql);
    
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $username;
            $_SESSION['mentor_id'] = $row['id']; // Store mentor ID in session
            header("Location: ./mentor/index.php");
            exit();
        } else {
            $error = "Invalid username or password";
        }
    }
}
?>
<br><br>
	<nav class="container" style="top: 10px; width:100%;">
		<div class="nav-head" style="width:auto ;"><marquee direction="right" style="color: thistle;">WELCOME TO INTERNLINK</marquee></div>
	  </nav>
<br><br><br>
      <div class="login-container">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  class="login-form"  method="post" name="login">
<p class="heading">Login</p>
<p></p>
<div class="input-group">
<input type="text" name="username" placeholder="Username" required />
</div>
<div class="input-group">
<input type="password" name="password" placeholder="Password" required />
</div>
<input class="button" name="submit" type="submit" value="Login" />
<div class="bottom-text">
<p style="color: white;">Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
</form>
</div>



<?php if(isset($error)) { echo $error; } ?>
</body>
</html>