<?php

// If statement to check if button submit was clicked and data was sent successfully to contact-form.php
if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Mysql connection made to PHPMyAdmin
    $connection = mysqli_connect('localhost:8889', 'root', 'root', 'php_form_data');

    // Return message to show it's connected
    if($connection) {
        echo "Success, connection is made";
    }

    $db_users = array($username);

    if(!in_array($username,$db_users = false)) {
        return false;
    } else {
        echo "Welcome";
    };

    // Query data entered
    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        echo "Query FAILED!";
    }
}

?>
