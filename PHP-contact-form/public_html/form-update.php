<?php

// If statement to check if button submit was clicked and data was sent successfully to contact-form.php
if(isset($_POST['submit'])) {

    // Mysql connection made to PHPMyAdmin
    $connection = mysqli_connect('localhost:8889', 'root', 'root', 'php_form_data');

    // Return message to show it's connected
    if(!$connection) {
        die("Error, Connection has broken");
    }

    // Query data entered
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        echo "Query FAILED!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

  <!-- Inline stylesheet -->
  <style>
        input {
            padding: 10px;
            margin-top: 10px;
            width: 100%;
            max-width: 300px;
        }

    </style>
<body>
    
    <form action="form-update.php" method="post" class="php-Form">
        <input type="text" name="username" placeholder="Please type your username"><br>
        <input type="password" name="password" placeholder="Please type your password"><br><br>
        
        <select name="id" id="">
            <option value="" id="">44</option>
            <option value="" id="">45</option>
            <option value="" id="">46</option>
        </select><br>
        <input type="submit" name="submit" value="UPDATE">
    </form>
    
</body>
</html>
