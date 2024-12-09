<?php

function DbConnection($server = "localhost", $username = "root", $password = "", $database = "geographical")
{
    $connection = new mysqli($server, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed:  {$connection->connect_error}");
    }

    return $connection;
}