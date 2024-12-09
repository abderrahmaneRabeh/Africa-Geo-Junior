<?php

// include "./connection.php";
include __DIR__ . '/connection.php';

$conx = DbConnection();

function List_des_villes($conx)
{

    // $sql = "SELECT * FROM ville";
    $sql = "SELECT ville.nom AS ville_nom, ville.type, pays.nom AS pays_nom FROM ville JOIN pays ON ville.id_pays = pays.id_pays";

    $result = $conx->query($sql);

    if (!$result) {
        die("Query failed: {$conx->error}");
    }

    return $result->num_rows > 0 ? $result : null;
}

$data = List_des_villes($conx);