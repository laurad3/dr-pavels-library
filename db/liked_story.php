<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	session_start();
	require 'db.php';

	$likedStory = $_POST['storyId'];
	$isFavorite = $_POST['isFavorite'];

	if($isFavorite == 'unfavorited') {
		if(likeStory($likedStory, $_SESSION['user'])) {
			echo 'liked';
			addLike($likedStory);
		}
	} else if($isFavorite == 'favorited') {
		if(unlikeStory($likedStory, $_SESSION['user'])) {
			echo 'disliked';
			removeLike($likedStory);
		}
	}

