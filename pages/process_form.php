<?php

include "../db/controller.php";


if (isset($_POST["ville_type"]) && isset($_POST["ville_pays"]) && isset($_POST["ville_nom"])) {

    $ville_type = $_POST["ville_type"];

    $ville_pays = $_POST["ville_pays"];

    $ville_nom = $_POST["ville_nom"];

    $result = Add_ville($conx, $ville_nom, $ville_pays, $ville_type);

    if ($result) {
        header("Location: ../index.php");
        exit();
    } else {
        header("Location: ../pages/form.php");
        exit();
    }

}