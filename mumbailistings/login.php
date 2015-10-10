<?php

	include("connect.php");
	include("functions.php");
	
	
	$error = "";

	if(isset($_POST['submit']))
	{
	
	    $email = mysql_real_escape_string($_POST['email']);
	    $password = mysql_real_escape_string($_POST['password']);
		
		if(email_exists($email,$con))
		{
			$result = mysqli_query($con, "SELECT password FROM users WHERE email='$email'");
			$retrievepassword = mysqli_fetch_assoc($result);
			$result1 = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
		$row=mysqli_fetch_array($result1);
		$fname=$row['firstname'];
		$lname=$row['lastname'];
		$phone=$row['phone'];
		$address=$row['address'];

			if(md5($password) !== $retrievepassword['password'])
			{
				$error = "Password is incorrect";
				echo $error;
			}
			else
			{
				$_SESSION['email'] = $email;
					setcookie("email",$email, time()+3600);
					setcookie("fname",$fname, time()+3600);
					setcookie("lname",$lname, time()+3600);
					setcookie("phone",$phone, time()+3600);
					setcookie("address",$address, time()+3600);
				
			}
			header("location: index.php");
			
		}
		else
		{
			$error = "Email Does not exists";
			echo $error;
		}
		
	
	}

?>



