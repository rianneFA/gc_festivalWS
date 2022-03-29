<?php

require_once('databaseFunctions.php');

function registerUser($firstname, $lastname, $email, $password) {
    $result = db_insertData("INSERT INTO users (email, firstname, lastname, password) VALUES ('$email', '$firstname', '$lastname', '$password')");
       return $result;
}

function getUser($email, $password) {
    $user = db_getData("SELECT id, firstName, lastName, email, password FROM users WHERE email = '$email' And password = '$password'");
        if($user->num_rows > 0) {
            return $user;
    } else {
            return "No user found";
    }
}