<?php
include('config.php');
$nonton = $_POST['nonton'];
$id_pesan = $_POST['id_pesan'];


$sql = mysqli_query($con, "insert into nonton(id_pesan, kursi) values (
	'$id_pesan', 
	'$nonton')");

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