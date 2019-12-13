<?php

include "config.php";

 // memeriksa data yang dikirim melalui GET
$type 	= $_GET['item_type'];

// if ($type == 'kursi') { // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "
SELECT id_kursi FROM pesan where id_jadwal='$type' and id_status='1' or id_jadwal='$type' and id_status='2' or id_jadwal='$type' and id_status='3';
";

// SELECT kursi.Kursi, pesan.id_kursi FROM kursi LEFT JOIN pesan on kursi.id_kursi=pesan.id_kursi where id_jadwal='$type'

$result = mysqli_query($con, $query);

$response = array();

    while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ
    	$kalimat = $row['id_kursi'];
    	$arr_kalimat = explode(" ", $kalimat);
    	for ($i=0; $i < count( $arr_kalimat ); $i++) { 
    		array_push($response,
    		array(
    			's_kursi' => $arr_kalimat[$i]
    		) 
    	);	
    	}
    }

    echo json_encode($response);  // enchoding kedalam JSON dari array
// }

mysqli_close($con); // menutup koneksi mysql

?>  