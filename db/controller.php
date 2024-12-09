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

// function displayListHtml($data)
// {
//     if ($data) {
//         echo "
//         <table border=1 style='width:100%;text-align:center'>
//             <tr>
//                 <th>Ville</th>
//                 <th>Type</th>
//                 <th>Pays</th>
//             </tr>
//         ";
//         while ($row = $data->fetch_assoc()) {
//             echo "<tr>
//                 <td>$row[ville_nom]</td>
//                 <td>$row[type]</td>
//                 <td>$row[pays_nom]</td>
//             </tr>";
//         }
//         echo "</table>";
//     }
// }

$data = List_des_villes($conx);




// displayListHtml($data);
