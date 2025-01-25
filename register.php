<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.
				 GO TO LOGIN PAGE')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="styl.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BACK TO SCHOOL</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
	<div class="login-clean">
			<!------------------------ Sidebar ------------------------------------------------->
	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="slider/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="slider/css/style.css">
	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
	<!-- Scripts -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="slider/js/menu_toggle.js"></script>
	<i class="fa fa-bars toggle_menu"></i>

	<div class="sidebar_menu">
		<i class="fa fa-times"></i>
		<center>
			<a"><h1 class="boxed_item">FRIENDS<span class="logo_bold">FOREVER</span></h1>
			</a>
		</center>

		<ul class="navigation_section">
			
			<a href="index.php"><li class="navigation_item" >
				If you have done your registration successfully ! Click Here !
			</li>
			</a>
			
			<a><li class="navigation_item" >
				If you have any issue regarding to login / signup contact to ADMIN thr email from bellow.
			</li>
			</a>
			
			<!--<a><li class="navigation_item" >
				CONTRIBUTE
			</li>
			</a>
			<a><li class="navigation_item">
				BRANCHES
			</li>
			</a>
			<a href="logout.php"><li class="navigation_item">
				LOGOUT
			</li>
			</a>-->
			
		</ul>
		<center>
				<a href="mailto:fforever.info@gmail.com"><h1 class="boxed_item boxed_item signup">
				<i class="fa fa-envelope"></i>
					SEND EMAIL
				</h1></a>
			</center>
	</div>
	<script src="slider/js/close_menu.js"></script>

		<form action="" method="POST" class="login-email">
			<h2 class="sr-only">Create Account</h2>
            <div class="illustration"><i class="icon ion-ios-people"></i></div>
            
			<div class="form-group">
				<input class="form-control " type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="form-group">
				<input class="form-control " type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="form-group">
				<input class="form-control " type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="form-group">
				<input class="form-control " type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="form-group">
				<button name="submit" class="btn btn-primary btn-block">Create Account</button>
			</div>
			<p class="login-register-text"> Already have an account? <a href="index.php">Click Here</a>!</p>
		</form>
	</div>
	
</body>
</html>