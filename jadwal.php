<?php

include "config.php";


$type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET

 // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "SELECT * FROM jadwal j 
LEFT JOIN jamtayang on j.id_jamtayang = jamtayang.id_jamtayang 
LEFT JOIN harga on j.id_harga = harga.id_harga 
LEFT JOIN studio on j.id_studio = studio.id_studio 
where id_film='$type'
ORDER BY tgl_jadwal DESC";
$result = mysqli_query($con, $query);

$response = array();

    while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ

        array_push($response, 
            array(
               "id_jadwal"=>$row["id_jadwal"],
               "id_film"=>$row["id_film"],
               "tgl_jadwal"=>$row["tgl_jadwal"],
               "jam_tayang"=>$row["jam_tayang"],
               "harga"=>$row["harga"],
               "studio"=>$row["studio"])
         );
        }

    echo json_encode($response);  // enchoding kedalam JSON dari array


mysqli_close($con); // menutup koneksi mysql

?> 