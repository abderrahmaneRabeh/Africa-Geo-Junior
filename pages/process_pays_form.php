<?php

include "../db/controller.php";


if (isset($_POST['pays_nom']) && isset($_POST['pays_population']) && isset($_POST['pays_continent']) && isset($_POST['pays_langues'])) {

    $pays_nom = $_POST['pays_nom'];
    $pays_population = $_POST['pays_population'];
    $pays_continent = $_POST['pays_continent'];
    $pays_langues = $_POST['pays_langues'];

    $result = Continent_add($conx, $pays_nom, $pays_population, $pays_langues, $pays_continent);

    if ($result) {
        header("Location: ../index.php");
        exit();
    } else {
        header("Location: ../pages/paysForm.php");
        exit();
    }

}