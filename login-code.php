<?php
session_start();
require_once'admin/config/dbcon.php';

if (isset($_POST['login_btn'])):

	$email = $mysqli -> real_escape_string($_POST['inputEmail']);
    $password =  $mysqli -> real_escape_string($_POST['inputPassword']);

	$login_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
	$login_query_run = $mysqli -> query($login_query);

	if($mysqli -> affected_rows > 0):
		
		foreach($login_query_run as $data) {

			$user_id		= $data['id'];
			$user_name		= $data['fname'] . " " . $data['lname'];
			$user_user_name	= $data['username'];
			$user_email		= $data['email'];
			$user_role_as	= $data['role_as'];
			$updated_at		= $data['updated_at'];
			$mail			= $data['mail'];
		}
		
		$_SESSION['updated_at'] = $updated_at;
		$_SESSION['mail'] = $mail;
		$_SESSION['auth'] = true;
		$_SESSION['auth_role'] = "$user_role_as"; //0 = user, 1 = admin, 2 = superadmin
		$_SESSION['auth_user'] = [
			'user_id' =>		$user_id,
			'user_name' =>		$user_name,
			'user_user_name' => $user_user_name,
			'user_email' =>		$user_email,
		];

		//Contador de acessos ao painel
		$now = date('Y-m-d H:i:s', strtotime('+0 seconds', strtotime(date('Y-m-d H:i:s'))));
		$lastUserVisit = "UPDATE `allsites`.`users` SET `updated_at` = '" . $now . "' WHERE (`id` = '" . $user_id . "')";
		$lastUserVisit_run = $mysqli -> query($lastUserVisit);
		
		//NíVEIS DE ACESSO
		if($_SESSION['auth_role'] >= '1'): //1 = admin, 2 = superadmin

			$_SESSION['message'] = "Welcome to dashboard";
			header("Location: admin/index.php");
			exit(0);
		
		elseif($_SESSION['auth_role'] == '0'): //0 = user
			
			$_SESSION['message'] = "You are logged in";
			header("Location: painel/index.php");
			exit(0);

		endif;

	else:

		// Invalid E-mail or Password.
		$_SESSION['message'] = "Invalid E-mail or Password.";
		header("Location: login.php");
		exit(0);
		

	endif;



Else:

	//Already Email Exists
	$_SESSION['message'] = "You are not allowed to access this file.";
	header("Location: login.php");
	exit(0);

Endif;

?>