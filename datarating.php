<?php

include "config.php";


$type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET

 // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "SELECT * FROM rating left join user on user.id_user=rating.id_user where id_film = '$type' ORDER BY tanggal DESC";
$result = mysqli_query($con, $query);

$response = array();

    while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ
      array_push($response, 
        array(
         "id_rating"=>$row["id_rating"],
         "tanggal"=>$row["tanggal"],
         "id_user"=>$row["id_user"],
         "nama"=>$row["username"],
          "photo"=>$row["photo"],
         "id_film"=>$row["id_film"],
         "nilai"=>$row["nilai"],
         "ulasan"=>$row["ulasan"])
      );
    }
    // }

    echo json_encode($response);  // enchoding kedalam JSON dari array


mysqli_close($con); // menutup koneksi mysql

?> 