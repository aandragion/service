<?php
include('config.php');
$id_pesan	= uniqid();
$id_user 	= $_POST['id_user'];
$id_film 	= $_POST['id_film'];
$id_jadwal 	= $_POST['id_jadwal'];
$kursi		= $_POST['kursi'];
$jumlah		= $_POST['jumlah'];
$total	 	= $_POST['total'];
$id_status= $_POST['id_status'];

// foreach ($kursi as $output) {
// $sql = mysqli_query($con, "insert into pesan(id_user,id_film, id_jadwal, id_kursi, jumlah_pesanan, total_harga, status_pesanan) values (
// 		'$id_user',
// 		'$id_film',
// 		'$id_jadwal',
// 		'$output',
// 		'$jumlah', 
// 		'$total',
// 		'$status_pesanan')");
// }

$sql = mysqli_query($con, "insert into pesan(id_pesan,id_user,id_film, id_jadwal, id_kursi, jumlah_pesanan, total_harga, id_status) values (
		'$id_pesan',
		'$id_user',
		'$id_film',
		'$id_jadwal',
		'$kursi',
		'$jumlah', 
		'$total',
		'$id_status')");

// $sql = mysqli_query($con, "insert into pesan(id_user,id_film, id_jadwal, jumlah, total) values (
// 		'$id_user',
// 		'$id_film',
// 		'$id_jadwal',
// 		'$jumlah', 
// 		'$total')");

if (isset($sql)) {
	$response["error"] = FALSE;
	echo json_encode($response); 
}else{
	$response["error"] = TRUE;
	$response["error_msg"] = "gagal memesan tiket mohon periksa kembali";
	echo json_encode($response);
}
$response = array("error" => FALSE);
mysqli_close($con);

?>