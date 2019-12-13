<?php

include "config.php";


$type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET

 // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "SELECT * FROM jadwal j LEFT JOIN studio on j.id_studio = studio.id_studio WHERE id_film=$type GROUP BY j.id_studio" ;
$result = mysqli_query($con, $query);

$response = array();

    while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ

        array_push($response, 
            array(
               "studio"=>$row["studio"])

         );
        }

    echo json_encode($response);  // enchoding kedalam JSON dari array


mysqli_close($con); // menutup koneksi mysql

?>