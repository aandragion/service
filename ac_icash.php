<?php

include "config.php";


$type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET


 // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "SELECT * FROM icash where id_user = '$type'";
$result = mysqli_query($con, $query);

$check = mysqli_fetch_array($result);

if (isset($check)) {
    $response["error"] = FALSE;
    $response["id_icash"]= $check["id_icash"];
    $response["id_user"]= $check["id_user"];
    $response["saldo_icash"] = $check["saldo_icash"];
    // $response["pemasukan"] = $check["pemasukan"];
    // $response["pengeluaran"] = $check["pengeluaran"];
    echo json_encode($response); 
}else{ 
    $response["error"] = TRUE;
    $response["error_msg"] = "Login gagal. Password/Email salah";
    echo json_encode($response);
}

// $response = array("error" => FALSE);
mysqli_close($con); // menutup koneksi mysql

?> 