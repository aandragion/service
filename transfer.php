<?php
include('config.php');
$tanggal 		= $_POST['tanggal'];
$id_user 		= $_POST['id_user'];
$id_bank 		= $_POST['id_bank'];
$jumlah_transfer = $_POST['jumlah_transfer'];
// $rek_pemilik	= $_POST['rek_pemilik'];
$n_pemilik	 	= $_POST['n_pemilik'];
$bts_topup 		= ($_POST['bts_topup']);
$status_topup = 2;
$sql = mysqli_query($con, "insert into topup(tanggal, id_user, id_bank, jumlah_transfer, n_pemilik, bts_topup, id_status) values (
	'$tanggal', 
	'$id_user',
	'$id_bank',
	'$jumlah_transfer',
	'$n_pemilik',
	'$bts_topup',
	'$status_topup')");
 
if (isset($sql)) {
	$response["error"] = FALSE;
	echo json_encode($response); 
}else{
	$response["error"] = TRUE;
	$response["error_msg"] = "akun anda belum terdaftar mohon periksa kembali";
	echo json_encode($response);
}
$response = array("error" => FALSE);
mysqli_close($con);

?>