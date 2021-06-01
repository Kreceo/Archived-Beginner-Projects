<?php 

class Process {

    function dbconnect() {
        $con = mysqli_connect("localhost","root","root","sewing-Guide");
        return $con;
    }

    function validate($data) {
        if ($data != ''){
            return htmlentities($data);
        }else{
            return NULL;
        }
    }

    function newUser($post){
        $conn = $this->dbconnect();

        $name = $this->validate($post['name']);
        $email = $this->validate($post['email']);
        $message = $this->validate($post['message']);
        $terms = $this->validate($post['termsAndConditions']);

        if ($terms == 'on') {

            //check for existing users
            $queryUsers = "SELECT email FROM users WHERE `email` = '$email'";
            $result = mysqli_query($conn, $queryUsers);

            $rowcount = mysqli_num_rows($result);

            if ($rowcount > 0) {
                return 'Already Registered';
            }else{
                //insert into database
                $query = "INSERT INTO users (email, name, newsletter) VALUES ('$email', 'test', 'test')";
                mysqli_query($conn, $query);

                return 'success';
            }
        }else{
            return 'Please accept T&C\'s';
        }

    }
}

if ($_POST) {
    $process = new Process;
    echo $process->newUser($_POST);
}

