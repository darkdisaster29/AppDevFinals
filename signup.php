<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<style>
	body {
		font-family: Georgia, "Times New Roman", Times, serif, sans-serif;
		background: color #b6b6b6;
		margin: 0;
		padding: 0;
		display: flex;
		align-items: center;
		justify-content: center;
		height: 100vh;
	}

	form {
		background-color: rgb(248, 248, 248)/*#302f30*/;
		border-radius: 8px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		padding: 20px;
		width: 300px;
		text-align: center;
		margin-left: 30vh;
	}

	label {
		text-align: left;
		display: block;
		margin-top: 5px;
	}

	input {
		text-align: left;
		width: 100%;
		padding: 10px;
		margin: 8px 0;
		box-sizing: border-box;
	}

	button {
		background-color: #4caf50;
		color: white;
		padding: 10px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		width: 100%;
	}

	.button {
		background-color: #4caf50;
		color: white;
		padding: 10px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		width: 100%;
	}

	button:hover {
		background-color: #45a049;
	}

	.toggle-form {
		margin-top: 20px;
		color: #555;
	}

	.toggle-form a {
		color: #4caf50;
		text-decoration: none;
		font-weight: bold;
	}

	.container {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		background-color: white;
	}

	* {
		box-sizing: border-box;
	}

	.slideshow-container {
		max-width: 1000px;
		position: relative;
		margin: auto;
	}

	.containers {
	display: none;
	position: absolute;
	width: 100%;
	height: 300px;
	opacity: 0;
	transition: opacity 1s ease-in-out;
	}

	.containers.show {
	opacity: 1;
	}
	.forward {
		right: 0;
		border-radius: 4px 0 0 4px;
	}

	.Back:hover,
	.forward:hover {
		background-color: rgba(0, 0, 0, 0.8);
	}

	.fade {
		-webkit-animation-name: fade;
		-webkit-animation-duration: 1.4s;
		animation-name: fade;
		animation-duration: 1.4s;
	}

	@-webkit-keyframes fade {
		from {
		opacity: 0.5;
		}

		to {
		opacity: 2;
		}
	}

	@keyframes fade {
		from {
		opacity: 0.5;
		}

		to {
		opacity: 2;
		}
	}
	</style>

<body>
    
<div class="container">
<form id="signup-form" method="post">
		<h2>Sign Up</h2>
		<label for="firstName">First Name</label>
		<input type="text" id="firstName" name="firstName" required />

		<label for="lastName">Last Name</label>
		<input type="text" id="lastName" name="lastName" required />

		<label for="email">Email</label>
		<input type="email" id="email" name="email" required />

		<label for="phone">Phone Number</label>
		<input type="tel" id="phone" name="phone" required />

		<label for="password">Password</label>
		<input type="password" id="password" name="password" required />

		<button type="submit" name="submit">Sign Up</button>
		<p class="toggle-form">

		Already have an account?
		<a href="login.php" onclick="toggleForm('login-form')">Log In</a>
		</p>
	
    <!-- php code -->
    <?php

    if (isset($_POST['submit']))    
    {
        $fname=$_POST['firstName'];	
        $lname=$_POST['lastName'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $pass=$_POST['password'];

        //local and online connection
        include ("connection.php");

        //search record
        $search="SELECT email from pet_tb where (email='$email')";
        $result=mysqli_query($con,$search);
        $output=mysqli_num_rows($result);


        if ($output==0)
        {
            //insert record
            $insert = "INSERT INTO `pet_tb` (`firstName`, `lastName`, `phone`, `email`, `password`) 
            VALUES ('$fname', '$lname', '$phone', '$email', '$pass')";
            mysqli_query($con, $insert);
            header('Location: login.php');
            
        }
        else 
        {
            print "<font color = 'black'><center>$email IS EXISTING";
            
        }

        // $_SESSION["password"] = $password;
    
    }

    ?>
    </form>
</div>

</div>

<div class="slideshow-container fade">
<div class="Containers fade">
	<img src="cc1.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc2.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc3.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc4.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc5.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc6.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc7.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc8.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc9.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc10.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc2.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc1.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc3.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc4.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc5.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc6.png" style="width: 100%" />
</div>

<div class="Containers fade">
	<img src="cc7.png" style="width: 100%" />
</div>
</div>
<br />

<script>
function toggleForm(formId) {
	document.getElementById("signup-form").style.display =
	formId === "signup-form" ? "block" : "none";

	document.getElementById("login-form").style.display =
	formId === "login-form" ? "block" : "none";
}

var slidePosition = 0;
SlideShow();

function SlideShow() {
	var i;
	var slides = document.getElementsByClassName("Containers");

	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}

	slidePosition++;

	if (slidePosition > slides.length) {
		slidePosition = 1;
	}

	slides[slidePosition - 1].style.display = "block";
	setTimeout(SlideShow, 3000);
}
</script>


</body>
</html>