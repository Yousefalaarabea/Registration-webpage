<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB_Ops";


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Create connection
if(!$conn)
{
	die("failed to connect!");
}
$full_name = $_POST['full_name'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];

if(!empty($full_name)&&!empty($user_name)&&!empty($password)&&!empty($address)&&!empty($email)&&!empty($phone))
{

	$check_query = "SELECT * FROM PD WHERE user_name='$user_name'";
	$check_result = mysqli_query($conn, $check_query);
	if (mysqli_num_rows($check_result) > 0) {
		echo json_encode(array('message' => 'Username already exists. Please choose another username!')) ;
		goback();
	}
	$sql = "INSERT INTO PD (full_name, user_name, birthdate, phone, address, password, email , image_name) VALUES ('{$_POST["full_name"]}','{$_POST["user_name"]}', '{$_POST["birthdate"]}',' {$_POST["phone"]}','{$_POST["address"]}', '{$_POST["password"]}', '{$_POST["email"]}', '')";


	try {
		$result = mysqli_query($conn, $sql);;		//upload($_FILES);
		if (!$result) {
			// If there's an error, print the error message and stop further execution
//			echo "Error: " . mysqli_error($conn);
			exit();
		}
		echo json_encode(array('message' => 'Success')) ;
	}catch (Exception $e ) {
		echo json_encode(array('message' => 'Fail')) ;

	}
	// Check for errors

	// Check if any rows were affected (inserted)
	if (mysqli_affected_rows($conn) > 0) {
		// If rows were affected, redirect with success message
	} else {
		// If no rows were affected, handle the error
		echo json_encode(array('message' => 'Error: No rows were inserted.')) ;


	}
}else
{
	echo json_encode(array('message' => 'Please enter some valid information!')) ;
}

//////if (isset($_POST["username"])) {
//	$username = "user_name";
//	$query = "SELECT id FROM PD WHERE user_name = ?";
//	$stmt = mysqli_prepare($conn, $query);
//	mysqli_stmt_bind_param($stmt, "s", $username);
//	mysqli_stmt_execute($stmt);
//	mysqli_stmt_store_result($stmt);
//	$count = mysqli_stmt_num_rows($stmt);
//	mysqli_stmt_close($stmt);
//	if ($count > 0) {
//		echo json_encode(array("error" => "Username already exists. Please choose a different username."));
//	} else {
//		echo json_encode(array("success" => "Username is available."));
//	}
////}
function goback()
{
	header("refresh:1; url=signup.php");
	exit;
}

function select($username)
{

}

//
//try {
//	mysqli_query($conn, $sql) ;
////	upload($_FILES);
//	echo json_encode(array('message' => 'Success')) ;
//}catch (Exception $e ) {
//	echo json_encode(array('message' => 'Fail')) ;
//}

?>
