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
	<link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">

	<script src="https://use.fontawesome.com/e1a59946d4.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<a href="index.php" class="logo"><img src="images/logo.svg" alt="logo"></a>
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
					<li><a href="about.php" class="active">about</a></li>
					<li><a href="stories.php">stories</a></li>
					<li><a href="contests.php">contests</a></li>
					<li><a href="faq.php">faq</a></li>
					<?php if (!isset($_SESSION['user'])): ?>
						<li><a href="login.php">login</a></li>
					<?php endif; ?>
				</ul>
			</nav>

			<nav class="main-nav">
				<ul>
					<li><a href="about.php" class="active">about</a></li>
					<li><a href="stories.php">stories</a></li>
					<li><a href="contests.php">contests</a></li>
					<li><a href="faq.php">faq</a></li>
				</ul>
			</nav>
		</header>

		<div class="content">
			<div class="title">About</div>
			<p class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi odit, consequuntur quas. Veniam quod fuga nesciunt aspernatur eos qui perspiciatis magni debitis! Veritatis officia aut, beatae voluptate dolorem nemo, itaque voluptatem explicabo iusto fugiat architecto deleniti mollitia consequatur rerum numquam ad magni magnam molestias suscipit animi nulla iure. Iste facere officiis consequuntur, ducimus vel repudiandae deleniti cumque accusantium fugiat debitis esse impedit atque sint culpa obcaecati possimus alias? Quas architecto, illum nesciunt voluptatum consectetur culpa accusantium porro error non voluptatem quo eius veritatis explicabo ipsa. Quia hic, porro velit quidem ratione cupiditate laboriosam fugiat alias quos. In neque rerum delectus dolor officiis, sunt nam natus laudantium laborum facere asperiores officia cupiditate nulla minima labore?</p>

			<p class="about">Laborum ea quisquam in recusandae, dignissimos id, odio molestiae, unde odit neque molestias facilis reiciendis perferendis iusto. Ipsam nam culpa saepe ex perspiciatis delectus, velit accusamus et, cum facilis expedita distinctio maiores cumque tenetur explicabo assumenda consectetur pariatur dolorum illum nihil voluptate. Nulla quaerat eligendi, repudiandae esse sunt nam temporibus laudantium, expedita consectetur, tempora tempore autem eos recusandae laboriosam ut quam inventore sequi dignissimos rem corporis quis? Consectetur amet placeat, sapiente ipsa. Facilis quaerat odit, deserunt, rem ratione fuga, animi necessitatibus magnam dolor, atque nostrum molestias!</p>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>