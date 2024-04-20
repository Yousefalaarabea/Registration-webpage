<?php

include 'header.php';

$conn = mysqli_connect("localhost", "root",  "", "DB_Ops");
session_start();

	include("connection.php");
	include("functions.php");


   if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER["REQUEST_METHOD"] == 'POST')
	{
		//something was posted
        $full_name = $_POST['full_name'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birthdate = $_POST['birthdate'];

		if(!empty($full_name)&&!empty($user_name)&&!empty($password)&&!empty($address)&&!empty($email)&&!empty($phone))
		{

			$query = "insert into PD (full_name, user_name, birthdate, phone, address, password, email) values ('$full_name', '$user_name', '$birthdate', '$phone', '$address', '$password', '$email')";

			mysqli_query($conn, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            background-color: #1f1f1f;
            color: #eee;
        }

        .my-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            font-family: 'Poppins', Arial, sans-serif;
        }

        .my-form h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #eee;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #eee;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"],
        .form-group input[type="date"],
        .form-group input[type="password"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #555;
            background-color: #444;
            color: #eee;
            box-sizing: border-box;
        }

        .btn-submit,
        #get-actors-button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit:hover,
        #get-actors-button:hover {
            background-color: #45a049;
        }



        header {
            background-color: #333;
            padding: 20px;
            text-align: center;
            color: #eee;
        }

        h1 {
            margin: 0;
            font-size: 36px;
            color: #eee;
        }
	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
            <label>Full Name</label>
			<input id="text" type="text" name="full_name" required><br><br>

            <label>User Name</label>
            <input id="text" type="user_name" name="user_name" required><br><br>

            <label>password</label>
            <input id="text" type="password" name="password" required><br><br>

            <label>address</label>
            <input id="text" type="address" name="address" required><br><br>

            <label>email</label>
            <input id="text" type="email" name="email" required><br><br>

            <label>phone</label>
            <input id="text" type="phone" name="phone" required><br><br>

            <label>birthdate</label>
			<input id="text" type="birthdate" name="birthdate"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

<!--		<a href="login.php">Click to Login</a><br><br>-->
		</form>
	</div>

    <?php
    include 'footer.php';
?>
</body>
</html>