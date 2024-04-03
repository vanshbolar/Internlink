<?php
include('./internlink.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INTERNLINK</title>
  <link rel="stylesheet" href="">
   <!-- Bootstrap CDN -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <style>
    :root {
    --navbar-bg-color: hsl(0, 0%, 15%);
    --navbar-text-color: hsl(0, 0%, 85%);
    --navbar-text-color-focus: grey;
    --navbar-bg-contrast: hsl(0, 0%, 25%);
  }
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;

  }
  body {
    height: 100vh;
    font-family: Arial, Helvetica, sans-serif;
    line-height: 1.6;
  }
  .btn{
    float: inline-end;
  }

#dept{
  width: 150px;
  height: 50px;
  background-color: #333;
 }
  .container {
    max-width: 10000px;
    padding-left: 1.4rem;
    padding-right: 1.4rem;
    margin-left:5px;
    margin-right: 10px;

  }
  #navbar {
    --navbar-height: 64px;
    position:absolute;
    height: var(--navbar-height);
    background-color: var(--navbar-bg-color);
    left: 0;
    right: 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
   
  }
  .navbar-container {
    display: flex;
    justify-content:space-evenly;
    height: 100%;
    align-items: center;
  }
  .navbar-item {
    margin: 0.4em;
    width: 100%;
  }
  
  .home-link,
  .navbar-link {
    color: var(--navbar-text-color);
    display:flex;
    font-weight: 400;
    font-size: large;
    align-items: center;
    text-decoration: none;
  }
  
  .home-link:is(:focus, :hover) {
    color: var(--navbar-text-color-focus);
    text-decoration: none;
  }
  
  .navbar-link {
    justify-content: center;
    width: 100%;
    padding: 0.4em 0.8em;
    border-radius: 5px;
    
  }
  
  .navbar-link:is(:focus, :hover) {
    color: var(--navbar-text-color-focus);
    background-color: var(--navbar-bg-contrast);
    text-decoration: none;
  }
  .navbar-logo {
    background-color: var(--navbar-text-color-focus);
    border-radius: 50%;
    width: 30px;
    height: 30px;
    margin-right: 0.5em;
  }
  #navbar-toggle {
    cursor: pointer;
    border: none;
    background-color: transparent;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }
  .icon-bar {
    display: block;
    width: 25px;
    height: 4px;
    margin: 2px;
    background-color: var(--navbar-text-color);
  }
  #navbar-toggle:is(:focus, :hover) .icon-bar {
    background-color: var(--navbar-text-color-focus);
  }
  #navbar-toggle[aria-expanded="true"] .icon-bar:is(:first-child, :last-child) {
    position: absolute;
    margin: 0;
    width: 30px;
  }
  #navbar-toggle[aria-expanded="true"] .icon-bar:first-child {
    transform: rotate(45deg);
  }
  #navbar-toggle[aria-expanded="true"] .icon-bar:nth-child(2) {
    opacity: 0;
  }
  #navbar-toggle[aria-expanded="true"] .icon-bar:last-child {
    transform: rotate(-45deg);
  }
  #navbar-menu {
    position: fixed;
    top: var(--navbar-height);
    bottom: 0;
    opacity: 0;
    visibility: hidden;
    left: 0;
    right: 0;
  }
  #navbar-toggle[aria-expanded="true"] + #navbar-menu {
    background-color: rgba(0, 0, 0, 0.4);
    opacity: 1;
    visibility: visible;
  }
  .navbar-links {
    list-style: none;
    position: absolute;
    background-color: var(--navbar-bg-color);
    display: flex;
    flex-direction: column;
    align-items: center;
    left: 0;
    right: 0;
    margin: 1.4rem;
    border-radius: 5px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
  }
  
  #navbar-toggle[aria-expanded="true"] + #navbar-menu .navbar-links {
    padding: 1em;
  }
  @media screen and (min-width: 700px) {
    #navbar-toggle,
    #navbar-toggle[aria-expanded="true"] {
      display: none;
    }
  
    #navbar-menu,
    #navbar-toggle[aria-expanded="true"] #navbar-menu {
      visibility: visible;
      opacity: 1;
      position: static;
      display: block;
      height: 100%;
    }
  
    .navbar-links,
    #navbar-toggle[aria-expanded="true"] #navbar-menu .navbar-links {
      margin: 0;
      padding: 0;
      box-shadow: none;
      position: static;
      flex-direction: row;
      width: 100%;
      height: 100%;
    }
  }
</style>
  </head>


  <body style="background-color:turquoise;" >
  
  <!-- start #header -->
  <header id="navbar">
      <nav class="navbar-container container">
        <a href="/" class="home-link">
          <div class="navbar-logo"></div>
          INTERNLINK
        </a>
        <button type="button" id="navbar-toggle" data-toggle="collapse" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
          <span class="icon-bar"></span>
        </button>
        <div id="navbar-menu" aria-labelledby="navbar-toggle">
          <ul class="navbar-links">
            <li class="navbar-item"><a class="navbar-link active-page " href="./index.php">Home</a></li>
            <li class="navbar-item"><a class="navbar-link active-page " href="./about.php">About</a></li>
            <li class="navbar-item"><a class="navbar-link active-page " href="./dashboard.php">Dashboard</a></li>
            <li class="navbar-item"><a class="navbar-link active-page " href="./contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <br><br>
     
      <!-- start #main-site -->
            <!--back to top-->
            <a id="button"></a>
            <!--back to top-->
      <!-- start categories -->
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="./html templates//form.css">
        <style>
    .containers {
    background-color: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 1); 
    margin: 35px auto; 
    width: 90% ;
    opacity: 0.8;
}

.about-section {
    margin-bottom: 10px;
}
p{
    text-transform: none;
}
body{
  background-image:url(./assets//1675591923154.jpg);
  background-size: contain;
  color:black;
}

</style>
    </head>
    <body>
  <br>
    <?php
    if(isset($_GET['cid'])) {
      // Retrieve the 'cid' parameter from the URL
      $cid = $_GET['cid'];
    $select_query = "SELECT *FROM intinfo WHERE cid=$cid ";
    $result_query = mysqli_query($con, $select_query);
  

    while ($row = mysqli_fetch_assoc($result_query)) {
        $cid = $row['cid'];
        $cname = $row['cname'];
        $cdesc = $row['cdesc'];
        $idesc = $row['idesc'];
        $duration = $row['duration'];
        $time = $row['time'];

        echo "        <div class='containers'>
        <section class='about-section'>

            <h4>$cname</h4>
            <p>$cdesc</p>
        </section>

        <section class='about-section'>
            <h4>DESCRIPTION OF INTERNSHIP</h4>
            <p> $idesc</p>
        </section>

        <section class='about-section'>
            <h4>DURATION</h4>
            <p>$duration</p>
            <h4>TIME</h4>
            <p>$time</p>
        </section>
        ";
    }
  }
?>



            <!-- The form -->

         <div class="Apply"> 
          <button  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Apply now</button>
        </div>  
        <div id="id01" class="modal">
  
  <form  class="modal-content animate" action="reginfo.php" method="POST">

    <div class="container">
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter your name" id="name" name="name" required>

      <label for="regno"><b>Reg no</b></label>
      <input type="text" placeholder="Enter your Reg no" id="regno" name="regno" required>
        <br>

        <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter your email" name="email" required>
        <br>  
      
        <label for="stream"><b>Stream</b></label>
      <input type="text" placeholder="Enter your stream" name="stream" required>
        <br>
      <br>
      
      <label for="cname"><b>Company name</b></label>
      <input type="text" placeholder="Enter company name" name="cname" required>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="submit" class="submitbtn">Submit</button>
    </div>
  </form>
</div> 
</div>

             


<script>

function id01() {
  var form = document.getElementById("id01");
  form.style.backgroundColor = "#ffffff"; /* Change background to solid color */
  form.style.display = "block"; /* Show the form */
}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"/></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </script>
</body>
</html>


