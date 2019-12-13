<?php

include "config.php";


$type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET

if ($type == 'coming') { // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "SELECT * FROM film join genre on genre.id_genre=film.id_genre where status_film='coming soon'";
$result = mysqli_query($con, $query);

$response = array();

    while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ

        array_push($response,
            array(
                'id_film'=>$row['id_film'], 
                'judul_film'=>$row['judul_film'], 
                'gambar'=>$row['gambar'],
                'sinopsis'=>$row['sinopsis'],
                'trailer'=>$row['trailer'],
                'id_genre'=>$row['genre'],
                'status_film'=>$row['status_film'],
                'durasi'=>$row['durasi'],
                'rilis'=>$row['rilis'],
                'total_view'=>$row['total_view']) 
        );
    }

    echo json_encode($response);  // enchoding kedalam JSON dari array
}

mysqli_close($con); // menutup koneksi mysql

?> 