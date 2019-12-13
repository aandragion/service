<?php
include('config.php');

$username = $_POST['username'];
$alamat = $_POST['alamat'];
$email	  = $_POST['email'];
$no_tlp	  = $_POST['no_tlp'];
$password = md5($_POST['password']);
$repassword = md5($_POST['repassword']);
// $repassword = $password;
$hak_akses = 2 ;
$sql = mysqli_query($con, "insert into user(username, alamat, email, no_tlp, password, hak_akses) values (
	'$username', 
	'$alamat',
	'$email', 
	'$no_tlp',
	'$password',
	'$hak_akses')");

if (isset($sql)) {
	$response["error"] = FALSE;
	echo json_encode($response); 
// }
// elseif($password != $repassword){
// 	echo "password tidak sama";
}else{
	$response["error"] = TRUE;
	$response["error_msg"] = "akun anda belum terdaftar mohon periksa kembali";
	echo json_encode($response);
}
$response = array("error" => FALSE);
mysqli_close($con);

?>