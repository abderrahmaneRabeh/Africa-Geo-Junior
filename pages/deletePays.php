<?php

include "../db/controller.php";

$result = delete_pays($conx, $_GET["id"]);

if ($result) {
    header("Location: ../index.php?msg=Pays supprimé");
    exit();
} else {
    header("Location: ../index.php?error=Une erreur s'est produite lors de la suppression du pays");
    exit();
}