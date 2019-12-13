<?php
include('config.php');
$id_user = $_POST['id_user'];
$id_film = $_POST['id_film'];
$nilai	 = $_POST['nilai'];
$ulasan	 = $_POST['ulasan'];

$sql = mysqli_query($con, "insert into rating(id_user, id_film, nilai, ulasan) values (
	'$id_user', 
	'$id_film',
	'$nilai',
	'$ulasan')");

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