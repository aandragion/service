<?php


// require_once('config.php');

// mysql_select_db($database_localhost,$con);

// $query_search ="select * from user where username = '".$_POST['username']."' and password = '".(md5($_POST['password']))."'";

// $query_exec = mysql_query($query_search) or die(mysql_error());

// if (mysql_errno()) {

//    header("HTTP/1.1 500 Internal Server Error");

//    echo $query.'\n';

//    echo mysql_error();
 
// } else {
//   if(mysql_num_rows($query_exec) != false){

//   				$response["error"] = FALSE;
//   				$response["user"] = mysql_fetch_assoc($query_exec);
//                 // $response=mysql_fetch_object($query_exec);

//             print(json_encode($response));

//         } else {echo "No Data"; }

//         mysql_close();

// }

session_start();
include('config.php');

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
	$res = mysqli_query($con,$sql);

	$check = mysqli_fetch_array($res);

	if ($check['hak_akses']==2) {
		$_SESSION['id_user'] = $check["id_user"];
		$_SESSION['hak_akses'] = 2;
		$response["error"] = FALSE;
		$response["id_user"]["id_user"]= $check["id_user"];
        $response["user"]["username"] = $check["username"];
        $response["user"]["alamat"] = $check["alamat"];
        $response["user"]["email"] = $check["email"];
        $response["user"]["no_tlp"] = $check["no_tlp"];
        $response["user"]["password"] = $check["password"];
        $response["user"]["photo"] = $check["photo"];
        echo json_encode($response); 
        
	}else{
		$response["error"] = TRUE;
        $response["error_msg"] = "Login gagal. Username/Password salah";
        echo json_encode($response);
	}
$response = array("error" => FALSE);
	mysqli_close($con);

	?>