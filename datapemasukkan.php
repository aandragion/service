
<?php

include "config.php";


$type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET

 // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "SELECT * FROM topup left join bank on bank.id_bank=topup.id_bank left join status on status.id_status=topup.id_status where id_user = '$type' ORDER BY id_topup DESC";
$result = mysqli_query($con, $query);

$response = array();

    while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ
      array_push($response, 
        array(
         "id_topup"=>$row["id_topup"],
         "tanggal"=>$row["tanggal"],
         "id_user"=>$row["id_user"],
         "id_bank"=>$row["id_bank"],
         "logo_bank"=>$row["logo_bank"],
         "nama_pemilik"=>$row["nama_pemilik"],
         "no_rekening"=>$row["no_rekening"],
         "jumlah_transfer"=>$row["jumlah_transfer"],
           // "rek_pemilik"=>$row["rek_pemilik"],
         "n_pemilik"=>$row["n_pemilik"],
         "bts_topup"=>$row["bts_topup"],
         "status_topup"=>$row["status"] )
      );
    }
    // }

    echo json_encode($response);  // enchoding kedalam JSON dari array


mysqli_close($con); // menutup koneksi mysql

?> 