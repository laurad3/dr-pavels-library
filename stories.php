<?php
	// ini_set('display_errors', 1);
	// error_reporting(E_ALL);

	session_start();
	require 'db/db.php';

	$storiesArray = getStories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,700|Satisfy" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://use.fontawesome.com/e1a59946d4.js"></script>
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
					<li><a href="stories.php" class="active">stories</a></li>
					<li><a href="contests.php">contests</a></li>
					<li><a href="faq.php">faq</a></li>
					<?php if (!isset($_SESSION['user'])): ?>
						<li><a href="login.php">login</a></li>
					<?php endif; ?>
				</ul>
			</nav>

			<nav class="main-nav">
				<ul>
					<li><a href="about.php">about</a></li>
					<li><a href="stories.php" class="active">stories</a></li>
					<li><a href="contests.php">contests</a></li>
					<li><a href="faq.php">faq</a></li>
				</ul>
			</nav>
		</header>

		<div class="content">
			<div class="title">Recent Stories</div>
			<div class="collection">
				<?php foreach($storiesArray as $key=>$value): ?>
					<div class="story"><a href="stories-page.php?story_id=<?php echo $value['id']; ?>">
						<div class="overlay"><?php echo $value['story_likes'] ?> <i class="fa fa-heart" aria-hidden="true"></i></div>
						<div class="story-info">
							<div class="story-title"><?php echo $value['story_title']; ?></div>
							<div class="story-author"><?php echo $value['story_author']; ?></div>
						</div>
						<div class="story-image-container">
							<img src="<?php echo $value['story_image']; ?>" alt="" class="story-image">
						</div>
					</a></div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>