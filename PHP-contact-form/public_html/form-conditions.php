<?php

// If statement to check if button submit was clicked and data was sent successfully to contact-form.php
if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Mysql connection made to PHPMyAdmin
    $connection = mysqli_connect('localhost:8889', 'root', 'root', 'php_form_data');

    // Return message to show it's connected
    //if($connection) {
    //    echo "Success, connection is made";
    //}

    // Query data entered
    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query FAILED!');
    }
    
    // Variable containing all allowed users
    $names = array("Darrell", "Josh", "David", "Matt", "Amba");

    // Global variable for minimum username length required.
    $minimum = 5;

    // Regex for password requirements, requing 1  uppercase, 1 lowercase and 1 letter.
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);

    // If password does not container 1 upper, lower or letter, then return error message.
    if(!$uppercase || !$lowercase || !$number || strlen($password) < 5) {
        die("Something went wrong, please ensure your password has: 1 uppercase, 1 lowercase, 1 number and is minimum of 5 characters long.");
      }

    // Check for string length, if not minimum requirement, return error message
    if(strlen($username) < $minimum) {
        echo "Username has to be at least 5 Characters long";
    }


    // If username is not in names array, return not allowed message, otherwise, say welcome.
    if(!in_array($username,$names)) {
        echo "You are not allowed";
    } else {
        echo "Welcome";
    }

    // Echoing username and password on screen when pressing submit
    // echo "Hello " . $username;
    // echo " Your password is " . " " . $password;
}

?>
