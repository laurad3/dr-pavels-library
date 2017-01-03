<?php
	// ini_set('display_errors', 1);
	// error_reporting(E_ALL);

	session_start();
	require 'db/db.php';

	$storyId = $_GET['story_id'];
	$storyContent = getStory($storyId);

	$getLiked = getLiked();
	$isLiked = 'unfavorited';
	$heartIcon = 'fa-heart-o';
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
					<li><a href="about.php">about</a></li>
					<li><a href="stories.php">stories</a></li>
					<li><a href="contests.php">contests</a></li>
					<li><a href="faq.php">faq</a></li>
				</ul>
			</nav>
		</header>

		<div class="story-page-content">
			<div class="story-page">
				<div class="story-page-image-container">
					<div class="story-page-title"><p><?php echo $storyContent[0]['story_title']; ?></p></div>
					<img src="<?php echo $storyContent[0]['story_image']; ?>" alt="">
				</div>

				<div class="story-page-text">
					<?php echo $storyContent[0]['story_text']; ?>
				</div>

				<div class="story-page-author">Created by <?php echo $storyContent[0]['story_author']; ?></div>

				<div class="actions">
					<div class="story-page-favorites"><span class="number"><?php echo $storyContent[0]['story_likes']; ?></span> <i class="fa fa-heart" aria-hidden="true"></i></div>
					
					<?php if(isset($_SESSION['user'])): ?>
						<?php
							foreach($getLiked as $key=>$value) {
								if($value['story_id'] == $storyId AND $value['user_name'] == $_SESSION['user']) {
									$isLiked = 'favorited';
									$heartIcon = 'fa-heart';
								}
							}
						?>
					
						<p class="like">Heart it! <i id="<?php echo $storyId; ?>" class="fa <?php echo $heartIcon; ?> <?php echo $isLiked; ?>" aria-hidden="true"></i></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>