<?php

include "config.php";


$type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET

 // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = 
"SELECT * FROM jadwal j LEFT JOIN jamtayang on j.id_jamtayang = jamtayang.id_jamtayang WHERE id_film=$type GROUP BY j.id_jamtayang" ;
// "SELECT * FROM jadwal join jamtayang on jamtayang.id_jamtayang=jadwal.id_jamtayang WHERE id_film=$type";
$result = mysqli_query($con, $query);

$response = array();

    while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ

        array_push($response, 
            array(
               "jam_tayang"=>$row["jam_tayang"])

         );
        }

    echo json_encode($response);  // enchoding kedalam JSON dari array


mysqli_close($con); // menutup koneksi mysql

?>