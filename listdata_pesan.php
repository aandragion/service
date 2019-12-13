<?php

include "config.php";


$type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET

 // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "SELECT * FROM $type left join film on film.id_film=pesan.id_film 
left join jadwal on jadwal.id_jadwal=pesan.id_jadwal 
left join jamtayang on jamtayang.id_jamtayang=jadwal.id_jamtayang
left join harga on harga.id_harga=jadwal.id_harga
left join studio on studio.id_studio=jadwal.id_studio
left join status on status.id_status=pesan.id_status
";
$result = mysqli_query($con, $query);

$response = array();

    while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ
      // if($row->status_topup == 1| $row->status_topup == 2){
      array_push($response, 
        array(
         "id_pesan"=>$row["id_pesan"],
         
       //   "id_user"=>$row["id_user"],
         
       //   "tanggal_pesan"=>$row["tanggal_pesan"],
         
       //   "id_film"=>$row["id_film"],
       //   "judul"=>$row["judul_film"],
       //   "gambar"=>$row["gambar"],
         
       //   "id_jadwal"=>$row["id_jadwal"],
       //   "tgl_jadwal"=>$row["tgl_jadwal"],
       //   "jam_ayang"=>$row["jam_tayang"],
       //   "harga"=>$row["harga"],
       //   "studio"=>$row["studio"],
         
       //   "kursi"=>$row["id_kursi"],
       //   "jumlah_pesanan"=>$row["jumlah_pesanan"],
       //   "total_harga"=>$row["total_harga"],
       // "status_pesanan"=>$row["status"]
     )
      );
    }
    // }

    echo json_encode($response);  // enchoding kedalam JSON dari array


mysqli_close($con); // menutup koneksi mysql

?> 