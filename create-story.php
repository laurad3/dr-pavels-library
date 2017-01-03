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

		<div class="content">
			<div class="title">Create Story</div>

			<form action="db/create_story.php" method="post" class="create-story-form" enctype="multipart/form-data">
				<div class="story-cover">
					<input type="file" name="story-image" class="inputfile" id="image-file">
					<label for="image-file" class="upload-story-image"><i class="fa fa-picture-o" aria-hidden="true"></i></label>
					<img src="images/example.jpg" alt="story image" class="uploaded-image">

					<div class="create-story-title-container">
						<input type="text" name="story-title" placeholder="What's the Title?">
					</div>
				</div>

				<textarea name="story-text" id="" cols="30" rows="10" placeholder="Start your story here..."></textarea>
				
				<div class="subtitle">Choose Genre</div>

				<div class="choose-genre">
					<input type="radio" name="story-genre" value="horror" id="horror-option">
					<label for="horror-option">Horror</label>

					<input type="radio" name="story-genre" value="comedy" id="comedy-option">
					<label for="comedy-option">Comedy</label>
					
					<input type="radio" name="story-genre" value="romance" id="romance-option">
					<label for="romance-option">Romance</label>
					
					<input type="radio" name="story-genre" value="action" id="action-option">
					<label for="action-option">Action</label>

					<input type="radio" name="story-genre" value="crime" id="crime-option">
					<label for="crime-option">Crime</label>

					<input type="radio" name="story-genre" value="fantasy" id="fantasy-option">
					<label for="fantasy-option">Fantasy</label>

					<input type="radio" name="story-genre" value="scifi" id="scifi-option">
					<label for="scifi-option">Sci-Fi</label>
				</div>

				<input type="submit" class="create-btn" value="Create" name="create-story">
			</form>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>