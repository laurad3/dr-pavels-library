<div class="my-user">
	<div class="user-name"><?php echo $_SESSION['user']; ?></div>
	<div class="user-btn">
		<img src="images/avatar.jpg" alt="owl">
	</div>
</div>

<div class="arrow-up"></div>
<div class="user-options">
	<div class="option"><a href="create-story.php">Create Story</a></div>
	<div class="option"><a href="my-stories.php">My Stories</a></div>

	<div class="option"><a href="db/user_logout.php" class="logout">Logout</a></div>
</div>