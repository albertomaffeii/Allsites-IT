<?php
session_start();

require_once'admin/config/dbcon.php';

if (isset($_POST['register_btn'])):

    // Serviço ou Plano selecionado
    $job = $_GET['job'];
    echo $job;
    
	// Escape special characters, if any
    $fname = $mysqli -> real_escape_string($_POST['inputFirstName']);
    $lname = $mysqli -> real_escape_string($_POST['inputLastName']);
    $uname = $mysqli -> real_escape_string($_POST['inputUserName']);
    $email = $mysqli -> real_escape_string($_POST['inputEmail']);
    $password =  $mysqli -> real_escape_string($_POST['inputPassword']);
    $cpassword =  $mysqli -> real_escape_string($_POST['inputPasswordConfirm']);
    
    //VERIFICA SE AS SENHAS DIGITADAS São IGUAIS
	if($password == $cpassword):

		//VERIFICA SE O EMAIL INFORMADO Já EXISTE
        $checkEmail = "SELECT email FROM users WHERE email = '$email'";
        $checkMail_run = $mysqli -> query($checkEmail);
		$checkMail_comp = $mysqli -> affected_rows;

		if($checkMail_comp > 0):

			// Email Already Exists
			$_SESSION['message'] = $lang['email_already_exists'];
			header("Location: register.php");
			exit(0);

		endif;

		//VERIFICA SE O USUáRIO INFORMADO Já EXISTE
        $checkUser = "SELECT username FROM users WHERE username = '$uname'";
        $checkUser_run = $mysqli -> query($checkUser);
		$checkUser_comp = $mysqli -> affected_rows;
        
		if($checkUser_comp > 0):

            //User Already Exists
            $_SESSION['message'] = $lang['user_already_exists'];
            header("Location: register.php");
            exit(0);

        else:
            $varMessage = "<strong><span class='bg-alert'>Clique em My Data e preencha o cadastro de Cliente para ativar os serviços</span></strong>";

			$user_query = "INSERT INTO users (fname, lname, username, email, password, mail) VALUES ('$fname', '$lname', '$uname', '$email', '$password', '$varMessage')";            

			if ($mysqli -> query($user_query) === TRUE):

                $idUserSessao = mysqli_insert_id($mysqli);

                $customers_query = "INSERT INTO customers (user_id, email1) VALUES ('$idUserSessao','$email')";
                $mysqli -> query($customer_query);

                $idCustomerSessao = mysqli_insert_id($mysqli);

                $services_query = "INSERT INTO services (customer_id, service) VALUES ('$idCustomerSessao','$job')";
                $mysqli -> query($services_query);

				//Registered Succefully
				$_SESSION['message'] = $lang['registered_succefully'];
				header("Location: login.php");
				exit(0);

			else:

				//Something Wrong
				echo "Error: <br>" . $user_query . "<br>" . $conn->error;
				$_SESSION['message'] = "<p>" . $lang['something_wrong'] . "</p>" . "Error: <br>" . $user_query . "<br>" . $conn->error;
                header("Location: register.php");
                exit(0);

			endif;

        endif;

    else:
        // Password not match
        $_SESSION['message'] = $lang['password_not_match'];
        header("Location: register.php");
        exit(0);

    endif;

else:
    
    header("Location: register.php");
    exit(0);
    
endif;