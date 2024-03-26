<?php

$con = mysqli_connect("localhost","root","","internlink");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Page - View PDFs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1 {
            text-align: center;
        }
        .pdf-list {
            list-style-type: none;
            padding: 0;
        }
        .pdf-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        .pdf-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }
        .pdf-title {
            font-weight: bold;
        }
        .pdf-embed {
            width: 100%;
            height: 500px;
        }
    </style>
</head>
<body>
    <h1>Student Internship Report</h1>
    <div class="container">
        <ul class="pdf-list">
            <li class="pdf-item">
                <p class="pdf-title">Student Name: John Doe</p>
                <p class="pdf-title">Registration Number: ABC123</p>
                <!--<embed class="pdf-embed" src="sample2.pdf" type="application/pdf" />-->
            </li>
            <li class="pdf-item">
                <p class="pdf-title">Student Name: Jane Smith</p>
                <p class="pdf-title">Registration Number: XYZ456</p>
                <!--<embed class="pdf-embed" src="sample2.pdf" type="application/pdf" />-->
            </li>
            <!-- Add more PDF items as needed -->
        </ul>
    </div>
</body>
</html>