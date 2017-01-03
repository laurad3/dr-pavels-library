<?php
	// ini_set('display_errors', 1);
	// error_reporting(E_ALL);

	session_start();
	require 'db/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,700|Satisfy" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<header>
			<a href="index.php" class="logo"><img src="images/logo.svg" alt=""></a>
			<p class="slogan">Create Stories. Work Together. Share with Friends.</p>

			<div class="user">
				<?php if(isset($_SESSION['user'])): ?>
					<?php require 'includes/user.php'; ?>
				<?php else: ?>
					<a href="login.php" class="login-btn">Login</a>
				<?php endif; ?>
			</div>
			
			<div class="mobile-nav-bar">
				<div class="nav-icon">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div class="clear"></div>
			</div>
			<nav class="mobile-nav">
				<ul>
					<li><a href="about.php">about</a></li>
					<li><a href="stories.php">stories</a></li>
					<li><a href="contests.php">contests</a></li>
					<li><a href="faq.php">faq</a></li>
					<?php if (!isset($_SESSION['user'])): ?>
						<li><a href="login.php" class="active">login</a></li>
					<?php endif; ?>
				</ul>
			</nav>

			<nav class="main-nav">
				<ul>
					<li><a href="about.php">about</a></li>
					<li><a href="stories.php">stories</a></li>
					<li><a href="contests.php">contests</a></li>
					<li><a href="faq.php">faq</a></li>
				</ul>
			</nav>
		</header>

		<div class="content">
			<div class="title">Login or Register</div>

			<div class="user-container">
				<div class="login-container">
					<?php echo $_GET['loginError']; ?>

					<form action="db/user_login.php" method="post">
						<input type="text" placeholder="Username" name="username">
						<input type="password" placeholder="Password" name="password">

						<input type="submit" class="user-btn" value="Login" name="user-login">
					</form>
				</div>

				<div class="register-container">
					<?php echo $_GET['userError']; ?>
					<?php echo $_GET['passError']; ?>

					<form action="db/validate.php" method="post">
						<input type="text" placeholder="Username" name="username">
						<input type="password" placeholder="Password" name="password">
						<input type="password" placeholder="Repeat Password" name="repeat-password">

						<input type="submit" class="user-btn" value="Register" name="user-register">
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>