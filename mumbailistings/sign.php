<?php

	include("connect.php");
	include("functions.php");
	
	$error = "";

	if(isset($_POST['submit']))
	{
		$firstName = mysql_real_escape_string($_POST['fname']);
		$lastName = mysql_real_escape_string($_POST['lname']);
	    $email = mysql_real_escape_string($_POST['email']);
	    $tel = mysql_real_escape_string($_POST['tel']);
	    $address = mysql_real_escape_string($_POST['address']);
	    $password = $_POST['password'];
	    $passwordConfirm = $_POST['passwordConfirm'];		
		$conditions = isset($_POST['conditions']);

		
		
		if(strlen($firstName) < 2)
		{
			$error = "First name is too short";
			echo $error;
		}
		
		else if(strlen($lastName) < 2)
		{
			$error = "Last name is too short";
			echo $error;
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error = "Please enter valid email address";
			echo $error;
		}
		else if(email_exists($email, $con))
		{
			$error = "Someone is already registered with this email";
			echo $error;
		}
		else if(strlen($tel) < 2)
		{
			$error = "Telephone is too short";
			echo $error;
		}
		else if(strlen($address) < 3)
		{
			$error = "Address is too short";
			echo $error;
		}
		else if($password !== $passwordConfirm)
		{
			$error = "Password does not match";
			echo $error;
		}			
		else if(!$conditions)
		{
			$error = "You must be agree with the terms and conditions";
			echo $error;
		}
		else
		{	
				$password = md5($password);
					$insertQuery = "INSERT INTO users(firstName, lastName, email, password, phone, address) VALUES ('$firstName','$lastName','$email','$password','$tel','$address')";
					if(mysqli_query($con, $insertQuery))
					{
							$error = "You are successfully registered";
							$_SESSION['email'] = $email;
							$result1 = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
								$row=mysqli_fetch_array($result1);
								$fname=$row['firstname'];
								$lname=$row['lastname'];
							$phone=$row['phone'];
							$address=$row['address'];
							setcookie("email",$email, time()+3600);
					setcookie("fname",$fname, time()+3600);
					setcookie("lname",$lname, time()+3600);
					setcookie("phone",$phone, time()+3600);
					setcookie("address",$address, time()+3600);

							header("location: index.php");

							
						}
						else
						{
							$error = "Sorry something broke down the line. Do try again.";
							echo $error;
						}
		}
							
	}

?>




