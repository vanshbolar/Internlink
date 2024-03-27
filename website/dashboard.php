<?php
    // include header.php file
    include ('./header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="file"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="submitform.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        
        <label for="stream">Stream:</label><br>
        <select id="stream" name="stream" required onchange="updateMentors()">
            <option value="">Select Stream</option>
            <option value="stream1">Stream 1</option>
            <option value="stream2">Stream 2</option>
        
        </select><br>
        
        <label for="mentor">Mentor:</label><br>
        <select id="mentor" name="mentor" required>
            <option value="">Select Mentor</option>
          
        </select><br>
        
        <label for="pdf_file">Report (PDF file):</label><br>
        <input type="file" id="pdf_file" name="pdf_file" accept="application/pdf" required><br>
        
        <button type="submit">Submit</button>
    </form>
    <script>
        function updateMentors() {
            var stream = document.getElementById("stream").value;
            var mentorSelect = document.getElementById("mentor");
            mentorSelect.innerHTML = ""; // Clear previous options

            // Populate mentor options based on selected stream
            if (stream === "stream1") {
                // Populate mentor options for Stream 1
                var mentors = ["Mentor 1", "Mentor 2", "Mentor 3"];
                for (var i = 0; i < mentors.length; i++) {
                    var option = document.createElement("option");
                    option.text = mentors[i];
                    option.value = mentors[i];
                    mentorSelect.add(option);
                }
            } else if (stream === "stream2") {
                // Populate mentor options for Stream 2
                var mentors = ["Mentor A", "Mentor B", "Mentor C"];
                for (var i = 0; i < mentors.length; i++) {
                    var option = document.createElement("option");
                    option.text = mentors[i];
                    option.value = mentors[i];
                    mentorSelect.add(option);
                }
            }
            // Add more conditions for other streams as needed
        }
    </script>
</body>
</html>
