<?php
session_start();
include('config.php');

$id_pesan = $_POST['id_pesan'];

$status_sukses = 1;
$status_selesai = 3;
$sql = "SELECT * FROM pesan p left join nonton on nonton.id_pesan=p.id_pesan WHERE p.id_pesan = '$id_pesan' and id_status= '$status_sukses'or p.id_pesan='$id_pesan' and id_status='$status_selesai'";
$res = mysqli_query($con,$sql);

if ( mysqli_num_rows( $res ) == 0 ) {

	$response["error"] = TRUE;
	$response["error_msg"] = "Data pemesanan tidak ditemukan..";
	echo json_encode( $response );

}

if ( mysqli_num_rows( $res ) > 0 ) {

	// $check = mysqli_fetch_assoc($res);
	
		$query_update = "UPDATE pesan SET id_status = 3 WHERE id_pesan = '$id_pesan'";
		$update = mysqli_query( $con, $query_update );

		if( $update ) {
	while( $check = mysqli_fetch_assoc($res) ){
		$response["error"] = FALSE;
		// $response["user"]["kursi"] = $check["id_kursi"];
		$response["dipesan"] = array();
		$response["ditempati"] = array();
		$kalimat1 = $check['id_kursi'];
		$arr_kalimat1 = explode(" ", $kalimat1);
		for ($i=0; $i < count( $arr_kalimat1 ); $i++) { 
			array_push($response["dipesan"],
				array(
					'kursi' => $arr_kalimat1[$i]
				) 
			);	
		}

		$kalimat = $check['kursi'];
		$arr_kalimat = explode(" ", $kalimat);
		for ($i=0; $i < count( $arr_kalimat ); $i++) { 
			array_push($response["ditempati"],
				array(
					's_kursi' => $arr_kalimat[$i]
				) 
			);	
		}
		$response["error_msg"] =  "Kursi ". $check['id_kursi'] . " Berhasil..";
	}
}

	echo json_encode( $response );
		// }

}

mysqli_close($con);
?>