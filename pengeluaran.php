<?php
include('config.php');
$id_user 	= $_POST['id_user'];
$id_film 	= $_POST['id_film'];
$harga 		= $_POST['harga'];
$jumlah		= $_POST['jumlah'];
$total	 	= $_POST['total'];

$sql = mysqli_query($con, "insert into pengeluaran(id_user,id_film, harga, jumlah, total) values (
	'$id_user',
	'$id_film',
	'$harga',
	'$jumlah', 
	'$total')");

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