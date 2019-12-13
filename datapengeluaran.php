<?php

include "config.php";


$type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET

 // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "SELECT * FROM pengeluaran 
left join pesan on pesan.id_pesan=pengeluaran.id_pesan 
left join film on film.id_film=pesan.id_film
left join jadwal on jadwal.id_jadwal=pesan.id_jadwal
left join harga on harga.id_harga=jadwal.id_harga
where pengeluaran.id_user = '$type'
ORDER BY tgl DESC";
$result = mysqli_query($con, $query);

$response = array();

    while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ
      // if($row->status_topup == 1| $row->status_topup == 2){
      array_push($response, 
        array(
         "id_keluar"=>$row["id_keluar"],
         "tgl"=>$row["tgl"],
         "id_user"=>$row["id_user"],
         "id_film"=>$row["id_film"],
         "judul"=>$row["judul_film"],
         "harga"=>$row["harga"],
         "jumlah"=>$row["jumlah_pesanan"],
         "total"=>$row["total_harga"]
       )
      );
    }
    // }

    echo json_encode($response);  // enchoding kedalam JSON dari array


mysqli_close($con); // menutup koneksi mysql

?> 