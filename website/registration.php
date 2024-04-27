<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="./registration.css" />
</head>
<body style="background-color:rgb(33, 33, 33);">
<?php
require('internlink.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "INSERT into users (username, email, password)
VALUES ('$username','$email', '$password' )";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<br><br><br><br><br><br>
<div class="login-container">
<form name="registration" action="" method="post">
<p class="heading">Register</p>
<p></p>      
<div class="input-group"> 
<input type="text" name="username" placeholder="Username" required />
</div>
<div class="input-group">
<input type="email" name="email" placeholder="Email" required />
</div>
<div class="input-group">
<input type="password" name="password" placeholder="Password" required />
</div>
<input class="button" type="submit" name="submit" value="Submit" />
</form>
</div>





<?php } ?>
</body>
</html>