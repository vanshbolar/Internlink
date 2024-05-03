<?php
    // include header.php file
    include ('./header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Internship Management System</title>
 
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

        img {
            margin-top: 10%; 
            border-radius: 0px;
            width: 100%; 
            height: 100% ;
        }

        .about-area {
            padding-top: 2%; 
        }

        .about-text {
            padding-top: 5%; 
            padding-right: 5%;
            width: auto;
        }

        .about-text h2 {
            color: black;
            font-family: 'Poppins', sans-serif;
            font-size: 25px;
        }

        .about-text p {
            font-family: 'Ubuntu', sans-serif;
            font-size: 18px;
            color: black;
            text-transform: none;
            margin-bottom: 0; 
        }

        .border {
            width: 100px;
            height: 10px;
            background: #34495e;
            margin: 20px auto; 
        }

        
        .col-lg-4,
        .col-lg-8 {
            padding: 0 10px; 
        }

    </style>
</head>

<body>

    <div class="about-area">
        <div class="container">
            <h1>About Us</h1>
            <div class="border"></div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-img">
                        <img src="./assets//logo.jpg" >
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-text">
                        <br><h2>&nbsp;&nbsp;Welcome to InternLink</h2>
                        <p>&nbsp;&nbsp;At InternLink, we're dedicated to providing college students with comprehensive information about internships. 
                        &nbsp;&nbsp;Our main goal is to revolutionize the internship process by digitalizing it for both students and mentors, 
                        ensuring &nbsp;&nbsp;efficiency, reliability, and transparency every step of the way. 
                        With InternLink, you can say goodbye to the risks of &nbsp;&nbsp;data loss and hello to streamlined internship management. 
                        <br>&nbsp;&nbsp;Our anticipated system will store and manage internship information, making the entire process faster and 
                        &nbsp;&nbsp;simpler for everyone involved. Join us on InternLink and take the next step towards your professional future!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
