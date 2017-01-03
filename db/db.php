<?php
	require 'config.php';

	function connect() {
		try {
			$db = new PDO('mysql:host='.db_hostname.';dbname='.db_database, db_username, db_password);

			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			die($e->getMessage());
		}

		return $db;
	}

	function checkLogin($name, $password) {
		$db = connect();

		$userName = $name;
		$userPassword = $password;

		$query = 'SELECT user_name, user_password FROM users WHERE user_name = :name AND user_password = :password';

		$userLogin = $db->prepare($query);

		$userLogin->execute(array(
			':name'=>$userName,
			':password'=>$userPassword
		));

		if($userLogin->rowCount()) {
			$userLogin->closeCursor();
			return TRUE;
		} else {
			$userLogin->closeCursor();
			return FALSE;
		}
	}

	function getAllUsernames() {
		$db = connect();

		$query = 'SELECT user_name FROM users';

		$getAllUsernames = $db->prepare($query);

		$getAllUsernames->execute();

		if($getAllUsernames) {
			return $getAllUsernames->fetchAll(PDO::FETCH_ASSOC);
		}
	}

	function registerUser($name, $password) {
		$db = connect();

		$query = 'INSERT INTO users(user_name, user_password) VALUES(:name, :password)';

		$registerUser = $db->prepare($query);

		$registerUser->execute(array(
			':name'=>$name,
			':password'=>$password
		));

		return $registerUser;
	}

	function addNewStory($title, $text, $genre, $image, $author, $likes) {
		$db = connect();

		$query = 'INSERT INTO stories(story_image, story_title, story_text, story_genre, story_author, story_likes) VALUES(:image, :title, :story_text, :genre, :author, :likes)';

		$addNewStory = $db->prepare($query);

		$addNewStory->execute(array(
			':image'=>$image,
			':title'=>$title,
			':story_text'=>$text,
			':genre'=>$genre,
			':author'=>$author,
			':likes'=>$likes
		));

		return $addNewStory;
	}

	function getStories() {
		$db = connect();

		$query = 'SELECT * FROM stories';

		$getStories = $db->prepare($query);

		$getStories->execute();

		if($getStories) {
			return $getStories->fetchAll(PDO::FETCH_ASSOC);
		}
	}

	function getFeatured() {
		$db = connect();

		$query = 'SELECT * FROM stories ORDER BY story_likes DESC LIMIT 3';

		$getFeatured = $db->prepare($query);

		$getFeatured->execute();

		if($getFeatured) {
			return $getFeatured->fetchAll(PDO::FETCH_ASSOC);
		}
	}

	function getStory($id) {
		$db = connect();

		$query = 'SELECT * FROM stories WHERE id = :story_id';

		$getStory = $db->prepare($query);

		$getStory->execute(array(
			':story_id'=>$id
		));

		if($getStory) {
			return $getStory->fetchAll(PDO::FETCH_ASSOC);
		}
	}

	function likeStory($id, $user) {
		$db = connect();

		$query = 'INSERT INTO user_liked_stories(user_name, story_id) VALUES(:user, :story)';

		$likeStory = $db->prepare($query);

		$likeStory->execute(array(
			':user'=>$user,
			':story'=>$id
		));

		if($likeStory) {
			return TRUE;
		}
	}

	function unlikeStory($id, $user) {
		$db = connect();

		$query = 'DELETE FROM user_liked_stories WHERE user_name = :user AND story_id = :story';

		$unlikeStory = $db->prepare($query);

		$unlikeStory->execute(array(
			':user'=>$user,
			':story'=>$id
		));

		if($unlikeStory) {
			return TRUE;
		}
	}

	function getLiked() {
		$db = connect();

		$query = 'SELECT * FROM user_liked_stories';

		$getLiked = $db->prepare($query);

		$getLiked->execute();

		if($getLiked) {
			return $getLiked->fetchAll(PDO::FETCH_ASSOC);
		}
	}

	function addLike($id) {
		$db = connect();

		$query = 'UPDATE stories SET story_likes = (story_likes+1) WHERE id = :id';

		$addLike = $db->prepare($query);

		$addLike->execute(array(
			':id'=>$id
		));

		if($addLike) {
			return TRUE;
		}
	}

	function removeLike($id) {
		$db = connect();

		$query = 'UPDATE stories SET story_likes = (story_likes-1) WHERE id = :id';

		$addLike = $db->prepare($query);

		$addLike->execute(array(
			':id'=>$id
		));

		if($addLike) {
			return TRUE;
		}
	}