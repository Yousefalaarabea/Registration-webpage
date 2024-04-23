<?php
////$conn = mysqli_connect("localhost", "root",  "", "DB_Ops");
//session_start();
//include('DB_Ops.php');
//
//   if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER["REQUEST_METHOD"] == 'POST')
//	{
//        $full_name = $_POST['full_name'];
//        $user_name = $_POST['user_name'];
//        $password = $_POST['password'];
//        $address = $_POST['address'];
//        $email = $_POST['email'];
//        $phone = $_POST['phone'];
//        $birthdate = $_POST['birthdate'];
//
//
//
//
//
//
//        $user_data = 'full_name='. $full_name. '&user_name='. $user_name . '&birthdate'.$birthdate.'&phone='. $phone.
//            '&address='. $address .'&password='. $password.'&email='. $email;
//
//
//        if(!empty($full_name)&&!empty($user_name)&&!empty($password)&&!empty($address)&&!empty($email)&&!empty($phone))
//		{
//
//			$query = "insert into db_ops (full_name, user_name, birthdate, phone, address, password, email) values ('$full_name', '$user_name', '$birthdate', '$phone', '$address', '$password', '$email')";
//
//            $result = mysqli_query($conn, $query);
//
//            // Check for errors
//            if (!$result) {
//                // If there's an error, print the error message and stop further execution
//                echo "Error: " . mysqli_error($conn);
//                exit();
//            }
//            // Check if any rows were affected (inserted)
//            if (mysqli_affected_rows($conn) > 0) {
//                // If rows were affected, redirect with success message
//                header("Location: signup.php?success=Your account has been created successfully");
//                exit();
//            } else {
//                // If no rows were affected, handle the error
//                echo "Error: No rows were inserted.";
//                echo "insert";
//                $sql2 = "insert into PD (full_name, user_name, birthdate, phone, address, password, email) values ('$full_name', '$user_name', '$birthdate', '$phone', '$address', '$password', '$email')";
//                $result2 = mysqli_query($conn, $sql2);
//                if ($result2) {
////                    echo "tmam";
//                    header("Location: signup.php?success=Your account has been created successfully");
//                    exit();
//                }else {
//                    echo "error";
//                    header("Location: signup.php?error=unknown error occurred&$user_data");
//                    exit();
//                }
//            }
//			die;
//		}else
//		{
//			echo "Please enter some valid information!";
//		}
//	}


    
   
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel = "stylesheet" href = "style.css">
</head>

<body>
<?php
    include 'header.php';
	?>
	<div id="box">

		<form id="RegForm" method="POST">
            <label >Full Name *</label>
            <input type="text" id="full_name" name="full_name"  placeholder="Enter your Name">
            <span class="error-message" style="color: darkred;"></span>
            <br><br>

            <label>User Name *</label>
            <input type="text"  id="user_name" name="user_name"  placeholder="Enter your User Name">
            <span class="error-message" style="color:darkred;"></span>
            <br><br>

            <label>password *</label>
            <input type="password" id="password" name="password"  placeholder="Enter your password">
            <span class="error-message" style="color:darkred;"></span>
            <br><br>

            <label>Confirm Password *</label>
            <input type="password" id="confirm_password" name="confirm_password"  placeholder="Confirm your password">
            <span class="error-message" style="color:darkred;"></span>

            <label>address *</label>
            <input type="text" id="address" name="address"  placeholder="Enter your address">
                <span class="error-message" style="color:darkred;"></span>
            <br><br>

            <label>email *</label>
            <input type="email" id="email" name="email"  placeholder="Enter your Email">
            <span class="error-message" style="color:darkred;"></span>
            <br><br>

            <label>phone *</label>
            <input type="tel" id="phone" name="phone"   placeholder="Enter your Phone Number">
            <span class="error-message" style="color:darkred;"></span>
            <br><br>

            <label>birthdate *</label>
			<input type="date" id="birthdate" name="birthdate"  placeholder="Enter your BirthDate">
<!--            <button type="button"  id="get-actors-button">Actors born in the same Day</button>-->
            <span class="error-message" style="color:darkred;"></span>
            <br><br>

<!--			<input id="button" type="submit" value="Signup">-->
          <!--  <button type="submit">Signup</button>  -->
          <button type="submit" id="signupButton">Signup</button>

            <br><br>
		</form>
	</div>

    <?php
    include 'footer.php';
?>

<script>

        document.getElementById("RegForm").addEventListener("submit", function (e){
            e.preventDefault()

        })


    document.getElementById("RegForm").addEventListener("submit", function(e) {
        e.preventDefault();

/*
    var username = this.value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "check_username.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.error) {
                // Display error message to the user
                document.getElementById("username-error").textContent = response.error;
            } else {
                // Username is available, clear any error message
                document.getElementById("username-error").textContent = "";
            }
        }
    };
    xhr.send("username=" + encodeURIComponent(username));

   */ 

        var valid = true;

        function showError(input, message) {
            var errorElement = input.nextElementSibling;
            errorElement.textContent = message;
            valid = false;
        }

        function clearError(input) {
            var errorElement = input.nextElementSibling;
            errorElement.textContent = "";
        }

        function validateInput(input, fieldName) {
            if (input.value.trim() === "") {
                showError(input, "Please enter your " + fieldName);
            } else {
                clearError(input);
            }
        }

        function validatePassword(input, fieldName) {
            const password = input.value;
            const numberPattern = /\d/;
            const regex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

            if (password.length < 8) {
                showError(input, `${fieldName} must be at least 8 characters long.`);
            } else if (!numberPattern.test(password)) {
                showError(input, `${fieldName} must contain at least 1 number.`);
            } else if (!regex.test(password)) {
                showError(input, `${fieldName} must contain at least 1 special character.`);
            } else {
                clearError(input);
            }
        }
    

        function validateConfirmPassword(password, confirmPassword) {
            if (password.value !== confirmPassword.value) {
                showError(confirmPassword, "Passwords do not match.");
            } else {
                clearError(confirmPassword);
            }
        }

        // Validate each input field
        validateInput(document.getElementById("full_name"), "full name");
        validateInput(document.getElementById("user_name"), "username");
        validateInput(document.getElementById("birthdate"), "birthdate");
        validateInput(document.getElementById("phone"), "phone number");
        validateInput(document.getElementById("address"), "address");
        validateInput(document.getElementById("email"), "email");
        validateInput(document.getElementById("password"), "password");
        validateInput(document.getElementById("confirm_password"), "confirm password");

        validatePassword(document.getElementById("password"), "password");
        validateConfirmPassword(document.getElementById("password"), document.getElementById("confirm_password"));


        // Check if any error messages are present
        const errorMessages = document.querySelectorAll('.error-message');
        for (let i = 0; i < errorMessages.length; i++) {
            if (errorMessages[i].textContent !== "") {
                valid = false;
                break;
            }
        }

        // If all validations pass, submit the form
        if (valid) {
            var formData = new FormData(this);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'DB_Ops.php', true);
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    alert(xhr.responseText)
                }
                else {
                    // Request failed, handle error
                    console.error('Request failed: ' + xhr.status);
                }
            };
            xhr.send(formData);
        }

    });
</script>


        <script src="API-Ops.js"></script>
    
</body>
</html> 