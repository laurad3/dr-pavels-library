<?php
	// ini_set('display_errors', 1);
	// error_reporting(E_ALL);

	session_start();
	require 'db.php';

	if(isset($_POST['user-register'])) {
		$userRegisterName = $_POST['username'];
		$userRegisterPass = $_POST['password'];
		$userRegisterRepeatPass = $_POST['repeat-password'];
		$valid = true;

		// check if username already exists
		$usernames = getAllUsernames();

		foreach($usernames as $key=>$value) {
			if(in_array($userRegisterName, $value)) {
				$userError = '<div class="error-message">Username is already in use</div>';
				$valid = false;
			}
		}

		// check that passwords match
		if($userRegisterPass != $userRegisterRepeatPass) {
			$passError = '<div class="error-message">Passwords do not match</div>';
			$valid = false;
		}

		if($valid) {
			if(registerUser($userRegisterName, $userRegisterPass)) {
				$_SESSION['user'] = $userRegisterName;
				header('Location: ../my-stories.php');
			}
		} else {
			header('Location: ../login.php?userError=' . $userError . '&passError=' . $passError);
		}
	}