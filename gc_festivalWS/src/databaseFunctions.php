<?php

function db_connect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "graafschapfestival";


    $mysqli = new mysqli($servername, $username, $password, $database);
    return $mysqli;
}

function db_getData($query) {
    $mysqli = db_connect();
    $result = $mysqli->query($query);
    $mysqli->close();
    return $result;
}

function db_insertData($query) {
    $mysqli = db_connect();
    $result = db_getData($query);
    if($mysqli->query($query) == TRUE) {
        $result = $mysqli->insert_id;
    } else {
        $result = "Error: " . $query . "<br>" . $mysqli->error;
    }
    $mysqli->close();
    return $result;
}