<?php
	// ini_set('display_errors', 1);
	// error_reporting(E_ALL);

	session_start();
	require 'db.php';

	if(isset($_POST['user-login'])) {
		$userLoginName = $_POST['username'];
		$userLoginPass = $_POST['password'];

		if(checkLogin($userLoginName, $userLoginPass)) {
			$_SESSION['user'] = $userLoginName;
			header('Location: ../my-stories.php');
		} else {
			$loginError = '<div class="error-message">Username and password do not match</div>';
			header('Location: ../login.php?loginError=' . $loginError);
		}
	}