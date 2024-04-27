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
            background-image: url(./assets//shutterstock_387365044-1068x712.jpg);
            opacity: 0.9;
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
<br><br>
<form action="submitform.php" method="POST" enctype="multipart/form-data">
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name" required><br>
    
    <label for="name">Regno</label><br>
    <input type="text" id="regno" name="regno" required><br>

    <label for="stream">Stream</label>
    <select id="stream" name="stream" required>
        <option value="" selected="selected" disabled="disabled">Select Stream</option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="BA">BA</option>
        <option value="BVOC">BVOC</option>
        <option value="BCOM">BCOM</option>
    </select><br>
    
    <label for="mentor">Mentor</label>
    <select id="mentor" name="mentor" required>
        <!-- Mentor options -->
    </select><br>
    
    <label for="pdf_file">Upload PDF File:</label><br>
    <input type="file" name="pdf_file"
                 class="form-control" accept=".pdf"
                 title="Upload PDF"/><br>
    
    <button type="submit">Submit</button>
</form>

<script>
document.getElementById('stream').addEventListener('change', function() {
    var stream = this.value;
    var mentorSelect = document.getElementById('mentor');
    mentorSelect.innerHTML = ''; 
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'fetch_mentors.php?stream=' + stream, true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            var mentors = JSON.parse(xhr.responseText);
            if (mentors.length > 0) {
                mentors.forEach(function(mentor) {
                    var option = document.createElement('option');
                    option.value = mentor.id;
                    option.textContent = mentor.username;
                    mentorSelect.appendChild(option);
                });
            } else {
                var option = document.createElement('option');
                option.value = '';
                option.textContent = 'No mentors available';
                mentorSelect.appendChild(option);
            }
        }
    };
    xhr.send();
});
</script>
</body>
</html>