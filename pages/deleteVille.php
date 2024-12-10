<?php

include "../db/controller.php";

if (isset($_GET["id"])) {

    $ville_id = $_GET["id"];

    $result = Delete_ville($conx, $ville_id);

    if ($result) {
        header("Location: ../index.php");
        exit();
    } else {
        header("Location: ../pages/form.php");
        exit();
    }
}