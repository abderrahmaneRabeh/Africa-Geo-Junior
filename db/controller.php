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

function dispayData($item)
{
    echo "
        <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"room-item shadow rounded overflow-hidden\">
                <div class=\"position-relative\">
                    <img class=\"img-fluid\" src=\"img/room-1.jpg\" alt=\"\">
                    " .
        (
            $item['type'] === 'town' ?
            "<small class=\"position-absolute start-0 top-100 translate-middle-y bg-success text-white rounded py-1 px-3 ms-4\">" . $item['type'] . "</small>"
            :
            "<small class=\"position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4\">" . $item['type'] . "</small>"
        ) .
        "
            </div>
            <div class=\"p-4 mt-2\">
                <div class=\"d-flex justify-content-between mb-3\">
                    <h5 class=\"mb-0\">" . $item['ville_nom'] . "</h5>
                </div>
                <p class=\"text-body mb-3\">" . $item['pays_nom'] . "</p>
                <div class=\"d-flex justify-content-between\">
                    <a class=\"btn btn-sm btn-primary rounded py-2 px-4\" href=\"\">Update</a>
                    <a class=\"btn btn-sm btn-dark rounded py-2 px-4\" href=\"\">Delete</a>
                </div>
            </div>
        </div>
    </div>
";
}

// form page

function Pays_list($conx)
{
    $sql = "SELECT * FROM pays";
    $result = $conx->query($sql);

    if (!$result) {
        die("Query failed: {$conx->error}");
    }

    return $result->num_rows > 0 ? $result : null;
}

// Ajouter une ville

function Add_ville($conx, $ville_nom, $ville_pays, $ville_type)
{

    $sql_check = "SELECT nom FROM ville WHERE nom = '$ville_nom'";
    $result_check = $conx->query($sql_check);

    if ($result_check->num_rows > 0) {
        header("Location: ../pages/form.php?error=La ville existe déjà");
        exit();
    }

    $sql = "INSERT INTO ville (nom, id_pays, type) VALUES ('$ville_nom', '$ville_pays', '$ville_type')";

    return $conx->query($sql) === TRUE;
}

// list des continents

function Continent_list($conx)
{
    $sql = "SELECT * FROM continent";
    $result = $conx->query($sql);

    if (!$result) {
        die("Query failed: {$conx->error}");
    }

    return $result->num_rows > 0 ? $result : null;
}

// Ajouter un pays

function Continent_add($conx, $pays_nom, $pays_population, $pays_langues, $pays_continent)
{

    $sql_check = "SELECT nom FROM pays WHERE nom = '$pays_nom'";
    $result_check = $conx->query($sql_check);

    if ($result_check->num_rows > 0) {
        header("Location: ../pages/paysForm.php?error=Country already exists");
        exit();
    }

    $sql = "INSERT INTO pays (nom, population, langues, id_continent) VALUES ('$pays_nom', '$pays_population', '$pays_langues', '$pays_continent')";

    return $conx->query($sql) === TRUE;

}