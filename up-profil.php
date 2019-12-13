<?php
include('config.php');
$namafolder="gambar/";

$id_user 	= $_POST['id_user'];
$username 	= $_POST['username'];
$alamat 	= $_POST['alamat'];
$email	  	= $_POST['email'];
$no_tlp	  	= $_POST['no_tlp'];
$password 	= md5($_POST['password']);
$photo		=$_FILES['photo']['type'];
$hak_akses = 2 ;

// if($photo=="image/jpeg" || $photo=="image/jpg" || $photo=="image/gif" || $photo=="image/png")
// {			
$gambar = $namafolder . basename($_FILES['photo']['name']);	
$filename= 	basename($_FILES['photo']['name']);
move_uploaded_file($_FILES['photo']['tmp_name'], $gambar);
$sql = mysqli_query($con, "UPDATE user SET username='$username', alamat='$alamat', email='$email', no_tlp='$no_tlp', password='$password', hak_akses='$hak_akses', photo='$filename' where id_user='$id_user'");

if (isset($sql)) {
	$response["error"] = FALSE;
	echo json_encode($response); 
}else {
	$response["error"] = TRUE;
	$response["error_msg"] = "GAGAL UPDATE";
	echo json_encode($response);
}
// } else{
// 	$response["error"] = TRUE;
// 	$response["error_msg"] = "GAGAL UPDATE";
// 	echo json_encode($response);
// }
$response = array("error" => FALSE);
mysqli_close($con);

?>