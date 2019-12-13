<?php

include "config.php";


$type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET

if ($type == 'bank') { // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "SELECT * FROM bank";
$result = mysqli_query($con, $query);

$response = array();

    while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ

        array_push($response,
            array(
                'id_bank'=>$row['id_bank'], 
                'nama_bank'=>$row['nama_bank'], 
                'logo_bank'=>$row['logo_bank'],
                'no_rekening'=>$row['no_rekening'],
                'nama_pemilik'=>$row['nama_pemilik']) 
        );
    }

    echo json_encode($response);  // enchoding kedalam JSON dari array
}

mysqli_close($con); // menutup koneksi mysql

?> 