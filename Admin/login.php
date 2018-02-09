
<!DOCTYPE HTML>
<html>

<head>
	<title>Kenns Travel</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Groovy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Font-Awesome-CSS -->
		<link href="bower_components/bootstrap/fonts/font-awesome.css" rel="stylesheet">
	<!--// Font-Awesome-CSS -->
	<!-- Required Css -->
		<link href="dist/css/style_login.css" rel='stylesheet' type='text/css' />
	<!--// Required Css -->
	<!--fonts-->
	<link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!--background-->
	<h1>Welcome Kenn's Travel</h1>
	<!-- Main-Content -->
	<div class="main-w3layouts-form">
		<h2>Login to your account</h2>
		<!-- main-w3layouts-form -->
		<form method="POST">
			<div class="fields-w3-agileits">
				<span class="fa fa-user" aria-hidden="true"></span>
				<input type="text" name="username" required="" placeholder="Username"/>
			</div>
			<div class="fields-w3-agileits">
				<span class="fa fa-key" aria-hidden="true"></span>
				<input type="password" name="password" required="" placeholder="Password" />
			</div>
			<div class="remember-section-wthree">
				
				<div class="clear"> </div>
			</div>
			<input type="submit" value="Login" name="login" />
		</form>
	</div>
	<div class="copyright-w3-agile">
		<p>&copy; 2018 Kenn's Travel All Rights Reserved | Design by Kennoldy</p>
	</div>
</body>

</html>
	<?php
	@session_start();
	require "connect.php";
	if(@$_POST['login']){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$sql = mysqli_query($cn, "SELECT * FROM user WHERE Username = '$username' AND password = '$password'") or die ($db->error);
		$data = mysqli_fetch_array($sql);
		$id = $data[0];
		$cek = mysqli_num_rows($sql);
		if($cek > 0) {
			$_SESSION['kennstravel'] = $id;
			echo "<script>window.location = 'pages/index.php'</script>";
		}else{
			echo "<script>alert('Login Gagal')</script>";
		}
	}
	?>