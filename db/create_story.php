<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	session_start();
	require 'db.php';

	if(isset($_POST['create-story'])) {
		$storyTitle = $_POST['story-title'];
		$storyText = htmlspecialchars($_POST['story-text']);
		$storyGenre = $_POST['story-genre'];
		$storyLikes = 0;
		$storyAuthor = $_SESSION['user'];

		// upload image
		$targetDir = 'uploads/';
		$targetFile = $targetDir . basename($_FILES['story-image']['name']);
		$storyImage = 'db/' . $targetFile;

		$uploadOK = 1;
		$fileType = pathinfo($targetFile, PATHINFO_EXTENSION);

		// check if file already exists
		// if(file_exists($targetFile)) {
		// 	$existsError = '<div class="centered-error-message">The image file already exists. Give another name</div>';
		// 	$uploadOK = 0;
		// }

		if($uploadOK == 1) {
			if(move_uploaded_file($_FILES['story-image']['tmp_name'], $targetFile)) {
				$addNewStory = addNewStory($storyTitle, $storyText, $storyGenre, $storyImage, $storyAuthor, $storyLikes);

				if($addNewStory) {
					$uploadSuccess = '<div class="success">Story Created!</div>';
					header('Location: ../my-stories.php?uploadSuccess=' . $uploadSuccess);
				}
			} else {
				$moveError = '<div class="centered-error-message">Image could not be uploaded</div>';
				header('Location: ../my-stories.php?moveError=' . $moveError);
			}
		}
	}