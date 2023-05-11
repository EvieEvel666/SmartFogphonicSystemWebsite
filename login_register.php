
<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
  header('Location: index.php');
  exit;
}

// Login form submitted
if (isset($_POST['login'])) {
  // Authenticate user
  if ($_POST['username'] == 'user' && $_POST['password'] == 'password') {
    // Set session variables
    $_SESSION['user_id'] = 1;
    $_SESSION['username'] = 'user';
    
    // Redirect to index page
    header('Location: index.php');
    exit;
  } else {
    $error = 'Invalid username or password';
  }
}

// Signup form submitted
if (isset($_POST['signup'])) {
  // Validate form data
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  
  if ($username != '' && $password != '') {
    // Set session variables
    $_SESSION['user_id'] = 1;
    $_SESSION['username'] = $username;
    
    // Redirect to index page
    header('Location: index.php');
    exit;
  } else {
    $error = 'Username and password are required';
  }
}
?>

<!DOCTYPE html>
	<html lang="en">

	<head>
	  <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>SFMS Login</title>
	  <link rel="stylesheet" href="style.css">
	  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	  <style>
	

@import url('https://fonts.googleapis.com/css2?family=Poppins&displau=swap');

	/* CSS for loginpage */
    
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}

body {
    background: black;
}

.header {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	padding: 22px 13.5%;
	background: transparent;
	display: flex;
	justify-content: space-between;
	align-items: center;
	z-index: 100;
}

.logo {
	font-size: 2em;
    padding: 17px;
	color: white;
	user-select: none;
}

.navigation a {
	position: relative;
    left: 30%;
	font-size: 16px;
	color: #e4e4e4;
	text-decoration: none;
	font-weight: 500;
	margin-left: 45px;
    
}

.navigation a::after {
	content: '';
	position: absolute;
	left: 0;
	bottom: -5px;
	width: 100%;
	height:3px;
	background: #fff;
	border-radius: 5px;
	transform: translateY(10px);
	opacity: 0;
	transition: .5s;
}


.navigation a:hover:after {
	transform: translateY(0);
	opacity: 1;
}


.search-bar {
	width: 250px;
	height: 38px;
	background: transparent;
	border: 2px solid #fff;
	border-radius: 6px;
	display: flex;
	align-items: center;

}

.background {
    width: 100%;
    height: 100vh;
    background: url('https://www.maximumyield.com/images/uploads/maximum-yield-fogponics-aeroponics-system.jpg?w=800&h=0&mode=Max&quality=80&scale=both&bgcolor=000000') no-repeat;
    background-size: cover;
    background-position: center;
    filter: blur(3px);
}

.search-bar input {
	width: 100;
	background: transparent;
	border: none;
	outline: none;
	font-size: 16px;
	color: white;
    padding-left: 10px;
}

.search-bar input::placeholder {
	color: #e4e4e4;
}

.search-bar button {
	width: 40px;
	height: 100%;
	background: transparent;
	border: none;
	outline: none;
	display: flex;
	justify-content: center;
	align-items: center;
}

.search-bar button i {
	font-size: 22px;
	color: white;
}


.container{
	position: absolute;
	top: 53%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 85%;
	height: 648px;
	background: url('https://www.maximumyield.com/images/uploads/maximum-yield-fogponics-aeroponics-system.jpg?w=800&h=0&mode=Max&quality=80&scale=both&bgcolor=000000') no-repeat;
	background-size: cover;
	background-position: center;
	border-radius: 10px;
	margin-top: 30px;
   
}

.container .content{
	position: absolute;
	top: 0;
	left: 0;
	width: 58%;
	height: 100%;
	background: transparent;

    padding: 70px;
    color: #e4e4e4;
    display: flex;
    box-shadow: 0 0 40px #000;
    justify-content: space-between;
    flex-direction: column;
   
}

.text-sci h2 {
    margin: 30px 0;
    font-size: 40px;
    line-height: 1;
}

.text-sci h2 span {
    font-size: 25px;
}

.text-sci p {
    font-size: 16px;
    margin: 30px 0;
}


.container .logreg-box {
	position: absolute;
	top: 0;
	right: 0;
	width: calc(100% - 58%);
	height: 100%;
    background: transparent;
    box-shadow: 0 0 40px black;
    overflow: hidden;
}


.logreg-box .form-box {
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 2%;
    right: 5%;
    width: 75%;
    height:97.5%;
    background: transparent;
    backdrop-filter: blur(30px);
   border-radius: 20px;
    color: #e4e4e4;
    box-shadow: 0 0 40px black;
}

.logreg-box .form-box.login {
    transform: translateX(0);
    transition: transform .6s ease;
    transition-delay: .6s;
  
}

.logreg-box.active .form-box.login {
    transform: translateX(470px);
	transition-delay: 0s;
  
}

.logreg-box .form-box.register {
    transform: translateX(470px);
	transition: transform .6s ease;
	transition-delay: 0s;
}

.logreg-box.active .form-box.register {
    transform: translateX(0);
	transition-delay: .6s;
}


.h2 {
    font-size: 2em;
    text-align: center;
}

.form-box .input-box {
    position: relative;
    width: 300px;
    height: 50px;
    border-bottom: 2px solid #e4e4e4;
    margin: 30px;
    transition: 1s ease-in-out;
}

.input-box input {
    width: 90%;
    height: 90%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #e4e4e4;
    font-weight: 500;
    padding-right: 28px;
    
    
}

.input-box label {
    position: absolute;
    top: 50%;
    left: 2px;
    transform: translateY(-50%);
    font-size: 16px;
    font-weight: 500;
    pointer-events: none;
    transition: .5s ease;
}

.input-box input:focus~label,
.input-box input:valid~label {
    top: -5px;
}



.icon {
    position: absolute;
    top: 13px;
    right: 0;
    font-size: 19px;
}


.btn {
	width: 100%;
	height: 45px;
	background: #00c2a7;
	border: none;
    outline: none;
	border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    color: black;
    font-weight: 500;
	box-shadow: 0 0 10px rgba(0, 0, 0, .5);
}

.form-box .login-register {
    font-size: 14.5px;
    font-weight: 500;
    text-align: center;
    margin-top: 20px;
}

.login-register p a {
    color: black;
    font-weight: 400;
    text-decoration: none;
}

.login-register p a:hover {
    text-decoration: underline;
}


.success {
    color: #3c763d;
    background: #dff0d8;
    border:1px solid #3c763d;
    margin-bottom: 20px;

}


	</style>
	</head>
	
	
	<!-- header tag starts here -->
	<body>
	<h2 class="logo"> </i> SFMS LOGIN</h2>

	
	<div class="background"></div>
	
	<div class="container">
		<div class="content">
			
				<div class="text-sci">
					<h2>Welcome!<br><span>To your monitoring system</span></h2>
	
					<p>Keep you up-to-date with Your fogponic .</p>
					<p> Detect your leaves sickness just by Uploading A picture</p>
					<p>Register now if you are not a Member of SMFS...</p>

				</div>
		</div>
	
	
		<div class="logreg-box" id="login-popup">

			<div class="form-box login">
				<form action="" method="post">

					<h2 style="text-align: center">Member Login</h2>
	
						<div class="input-box">
							<span class="icon"><i class='bx bxs-envelope'></i></span>
							<input type="email" name="email" required>
							<label>Email</label><br><br>
						</div>
	
						<div class="input-box">
							<span class="icon"><i class='bx bxs-lock-alt' ></i></span>
							<input type="password" name="password" required>
							<label>Password</label><br><br>
						</div>

						<button type="submit" name="login"class="btn">Log In</button><br><br></a>
						
						<div class="login-register">
							<p>Not yet a member? <a href="#signup" class="register-link">Register now</a></p><br><br>
						</div>
				</form>
		</div>


		<div class="form-box register" id="register-popup">
				
		<form action="" method="post">

				<h2 style="text-align: center;">Register</h2> 
					<div class="input-box">
						<span class="icon"><i class='bx bxs-user'></i></span>
						<input type="text" class="firstname" name="firstname" required>
						<label>First Name</label><br><br>
					</div>

					<div class="input-box">
						<span class="icon"><i class='bx bxs-user'></i></span>
						<input type="text" class="lastname" name="lastname" required>
						<label>Last Name</label><br><br>
					</div>
																						
					<div class="input-box">
						<span class="icon"><i class='bx bxs-envelope'></i></span>
						<input type="email" class="email" name="email" required >
						<label>Email Address</label><br><br>
					</div>
	
					<div class="input-box">
						<span class="icon"><i class='bx bxs-lock-alt' ></i></span>
						<input type="password" class="password" name="password" required >
						<label>Password</label><br><br>
					</div>
					
					<div class="input-box">
						<span class="icon"><i class='bx bxs-lock-alt' ></i></span>
						<input type="password" class="confirmpassword" name="confirmpassword" required>
						<label>Confirm Password</label><br><br>
					</div>
	
	
					<button type="submit" name="register" class="btn" >Register</button><br><br>
		
					<div class="login-register">
						<p>Already a member? <a href="#login" class="login-link">Login now</a></p><br><br>
					</div>
					
		</div>

	</div>

			
		<script src="script.js"></script>


</body>
</html>




