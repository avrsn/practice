<?php

    $errors = array('usernameErr' => 'asdfasdf');

    require_once 'server.php';
    session_start();

    if (isset($_POST['submitBtn'])) {
        echo "submitBtn pressed";

        $user = $_POST['username'];
        $pass = $_POST['password'];

        $query = "SELECT * FROM `users` WHERE usernameCol";
       
        var_dump($_POST);

        $query = "INSERT INTO `users`(`usernameCol`, `passwordCol`) VALUES ('$user', '$pass')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Data Insert Successfully.";
        } else {
            $errors['usernameErr'] = 'Username is already taken.';
            echo "Username taken!";
        }
    }

?>