<!-- <?php

include "config.php";


// $type = $_GET['item_type']; // memeriksa data yang dikirim melalui GET


 // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "SELECT COUNT(id_topup), id_user, n_pemilik FROM topup WHERE id_status= 2";
$result = mysqli_query($con, $query);

$check = mysqli_fetch_array($result);

if (isset($check)) {
    $response["error"] = FALSE;
    $response["id_icash"]= $check["COUNT(id_topup)"];
    $response["id_user"]= $check["id_user"];
    $response["saldo_icash"] = $check["n_pemilik"];
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

?>  -->

<?php

include "config.php";

 // memeriksa data yang dikirim melalui GET
$type   = $_GET['item_type'];

// if ($type == 'kursi') { // jika $_GET['item_type'] yaitu users, maka akan menjalankan kode dibawahnya

$query = "
SELECT * FROM pesan p left join nonton on nonton.id_pesan=p.id_pesan WHERE p.id_pesan = '$type' and id_status= '1';
";

// SELECT kursi.Kursi, pesan.id_kursi FROM kursi LEFT JOIN pesan on kursi.id_kursi=pesan.id_kursi where id_jadwal='$type'

$result = mysqli_query($con, $query);

$response = array();

    while( $row = mysqli_fetch_assoc($result) ){ // perulangan dari fetching asosiativ
        $kalimat = $row['kursi'];
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