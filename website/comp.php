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
  <link rel="stylesheet" href="./index.css">
   <!-- Bootstrap CDN -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>


<body>
  
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
              <li class="navbar-item"><a class="navbar-link" href="./index.php">Home</a></li>
              <li class="navbar-item"><a class="navbar-link" href="./about.php">About</a></li>
              <li class="navbar-item"><a class="navbar-link" href="./dashboard.php">Dashboard</a></li>
              <li class="navbar-item"><a class="navbar-link" href="./contact.php">Contact</a></li>
            </ul>
          </div>
        </nav>
      </header>
     
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
     
    </head>
    <body>
    
   

    <?php
    $select_query = "SELECT  * FROM `intinfo` ";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $cid = $row['cid'];
        $cname = $row['cname'];
        $cdesc = $row['cdesc'];
        $idesc = $row['idesc'];
        $duration = $row['duration'];
        $time = $row['time'];

        echo "<div class='container fs-6' style='background-color: ;'>
            <div class='col-md-12' style='width: 9000px;'>
                <div class='main-description my-9'>
                    <br><br><br>
                    <div class='name d'>
                        <br>
                        $cname
                    </div>
                    <div class='product-title my-3'>
                        DESCRIPTION<br>
                        $cdesc
                    </div>
                </div>
                <div class='product-details my-9'>
                    <div class='description  my-9'>DESCRIPTION OF INTERNSHIP<br> $idesc</div>
                </div>
                <br>
                <div class='delivery my-9'>
                    <div class=' mb-0'>DURATION<br>$duration</div>
                    <br>
                    <div>TIME <br>$time</div>
                </div>
            </div>
        ";
    }
?>

            
      

            <!-- The form -->

         <div class="Apply"> 
          <button  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Apply now</button>
        </div>  
        <div id="id01" class="modal">
  
  <form class="modal-content animate" action="reginfo.php" method="POST">

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


             


<script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"/></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </script>
</body>
</html>


