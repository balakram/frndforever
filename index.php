<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    

	<title>BACK TO SCHOOL</title>
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
			<a><li class="navigation_item" >
				If you have any issue regarding to login / signup contact to ADMIN thr email from bellow.
			</li>
			</a>
			<!--<a><li class="navigation_item" >
				ARTICLES
			</li>
			</a>
			<a><li class="navigation_item" >
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
			<center>
				<a href="mailto:fforever.info@gmail.com"><h1 class="boxed_item boxed_item signup">
				<i class="fa fa-envelope"></i>
					SEND EMAIL
				</h1></a>
			</center>
		</ul>

		
	</div>

	<script src="slider/js/close_menu.js"></script>
<!---------------------------------------------- End of sidebar --------------------------------->
	<div class="container">
		<form action="" method="POST" class="login-email">
			<h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-people"></i></div>
			<div class="form-group">
				<input class="form-control" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="form-group">
				<input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="form-group">
				<button name="submit" class="btn btn-primary btn-block">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
	
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>