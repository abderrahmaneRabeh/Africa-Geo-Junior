<?php

include "./connection.php";

$conx = DbConnection();


function List_des_villes($conx)
{

    $sql = "SELECT * FROM ville";
    $result = $conx->query($sql);

    if (!$result) {
        die("Query failed: {$conx->error}");
    }

    return $result->num_rows > 0 ? $result : null;
}
