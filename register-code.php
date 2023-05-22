<?php
session_start();

require_once'admin/config/dbcon.php';

if (isset($_POST['register_btn'])):

	// Escape special characters, if any
    $fname = $mysqli -> real_escape_string($_POST['inputFirstName']);
    $lname = $mysqli -> real_escape_string($_POST['inputLastName']);
    $uname = $mysqli -> real_escape_string($_POST['inputUserName']);
    $email = $mysqli -> real_escape_string($_POST['inputEmail']);
    $password =  $mysqli -> real_escape_string($_POST['inputPassword']);
    $cpassword =  $mysqli -> real_escape_string($_POST['inputPasswordConfirm']);
    
    //VERIFICA SE AS SENHAS DIGITADAS SÃO IGIUAIS
	if($password == $cpassword):

		//VERIFICA SE O EMAIL INFORMADO JÁ EXISTE
        $checkEmail = "SELECT email FROM users WHERE email = '$email'";
        $checkMail_run = $mysqli -> query($checkEmail);
		$checkMail_comp = $mysqli -> affected_rows;

		if($checkMail_comp > 0):

			//Already Email Exists
			$_SESSION['message'] = "E-mail Already Exists.";
			header("Location: register.php");
			exit(0);

		endif;

		//VERIFICA SE O USUÁRIO INFORMADO JÁ EXISTE
        $checkUser = "SELECT username FROM users WHERE username = '$uname'";
        $checkUser_run = $mysqli -> query($checkUser);
		$checkUser_comp = $mysqli -> affected_rows;
        
		if($checkUser_comp > 0):

            //User Already Exists
            $_SESSION['message'] = "User Already Exists.";
            header("Location: register.php");
            exit(0);

        else:

			$user_query = "INSERT INTO users (fname, lname, username, email, password) VALUES ('$fname', '$lname', '$uname', '$email', '$password')";

			if ($mysqli -> query($user_query) === TRUE):

				//Registered Succefully
				$_SESSION['message'] = "New record created successfully.";
				header("Location: login.php");
				exit(0);

			else:

				//Something Wrong
				echo "Error: <br>" . $user_query . "<br>" . $conn->error;
				$_SESSION['message'] = "<p>Something Wrong!</p>" . "Error: <br>" . $user_query . "<br>" . $conn->error;
                header("Location: register.php");
                exit(0);

			endif;

        endif;

    else:

        $_SESSION['message'] = "Password and Confirm Password dos not match";
        header("Location: register.php");
        exit(0);

    endif;

else:
    
    header("Location: register.php");
    exit(0);
    
endif;