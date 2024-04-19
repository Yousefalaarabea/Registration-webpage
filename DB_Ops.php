<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB_Ops";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$fullname = mysqli_real_escape_string($conn, $_POST['full_name']);
$user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
$birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Attempt insert query execution
$ImageDirectory = 'uploads/' .  $_FILES["user_image_name"]["name"]   ;
$sql = "INSERT INTO User (full_name, user_name, birthdate, phone, address, password, email , user_image) VALUES ('$fullname', '$user_name', '$birthdate', '$phone', '$address', '$password', '$email' , '$ImageDirectory')";


try {
    mysqli_query($conn, $sql) ;
    upload($_FILES);
    echo json_encode(array('message' => 'Success')) ;
}catch (Exception $e ) {
    echo json_encode(array('message' => 'Fail')) ;
}

// Close connection
$conn->close();

?>