<?php

include "config.php";


$type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET

if ($type == 'kursi') { // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "SELECT * FROM kursi";
$result = mysqli_query($con, $query);

$response = array();

    while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ

        array_push($response,
            array(
                'id_kursi'=>$row['id_kursi'], 
                'Kursi'=>$row['Kursi']) 
        );
    }

    echo json_encode($response);  // enchoding kedalam JSON dari array
}

mysqli_close($con); // menutup koneksi mysql

?> 