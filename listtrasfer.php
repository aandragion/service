<?php

include "config.php";


$type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET


 // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "SELECT * FROM transfer t 
left join pesan on pesan.id_pesan=t.id_pesan 
left join bank on bank.id_bank=t.id_bank 
left join status on status.id_status=t.id_status
where t.id_pesan = '$type'";
$result = mysqli_query($con, $query);

$check = mysqli_fetch_array($result);

if (isset($check)) {
    $response["error"] = FALSE;
    $response["id_transfer"]= $check["id_transfer"];
    $response["id_user"]= $check["id_user"];
    $response["tanggal"] = $check["tanggal_pesan"];
    $response["id_pesan"] = $check["id_pesan"];
    $response["total_harga"] = $check["total_harga"];
    $response["id_bank"]= $check["id_bank"];
    $response["logo_bank"]= $check["logo_bank"];
    $response["nama_pemilik"] = $check["nama_pemilik"];
    $response["no_rekening"] = $check["no_rekening"];
    $response["nama"] = $check["nama"];
    $response["bts_transfer"] = $check["bts_transfer"];
    $response["id_status"] = $check["status"];
    echo json_encode($response); 
}else{ 
    $response["error"] = TRUE;
    $response["error_msg"] = "Login gagal. Password/Email salah";
    echo json_encode($response);
}



// $response = array();

//     while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ
//       // if($row->status_topup == 1| $row->status_topup == 2){
//       array_push($response, 
//         array(
// "id_transfer"   =>$row["id_transfer"],
// "id_user"       =>$row["id_user"],
// "tanggal"       =>$row["tanggal_pesan"],
// "id_pesan"       =>$row["id_pesan"],
// "total_harga"   =>$row["total_harga"],
// "id_bank"       =>$row["id_bank"],
// "logo_bank"=>$row["logo_bank"],
// "nama_pemilik"=>$row["nama_pemilik"],
// "no_rekening"=>$row["no_rekening"],
// "nama"          =>$row["nama"],
// "bts_transfer"  =>$row["bts_transfer"],
// "id_status"     =>$row["status"] )
//     );
//   }
//     // }

//     echo json_encode($response);  // enchoding kedalam JSON dari array

// $response = array("error" => FALSE);
mysqli_close($con); // menutup koneksi mysql

?> 