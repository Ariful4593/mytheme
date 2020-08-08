<?php

	session_start();
	$db = new mysqli("localhost","root","","sign_up");

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$department = $_POST['department'];
		$semester = $_POST['semester'];

		$query = "INSERT INTO information(username, password, email,mobile,department,semester) VALUES ('$username' , '$password', '$email', '$mobile', '$department', '$semester')";
		$run = mysqli_query($db, $query);

		if($run){
			echo "Registration successful.!";
		}else{
			echo "error".mysql_error($db);
		}
	}

	if(isset($_POST['login'])){
		$username = $_POST['lusername'];
		$password = $_POST['lpassword'];

		$mysqli = new mysqli("localhost","root","","sign_up");
		$result = $mysqli->query("SELECT * FROM information WHERE username = '$username' AND password ='$password' ");
		$row = $result->fetch_assoc();

		if($row['username'] == $username && $row['password'] == $password){
			$message = "Login successful.!";
			header("Location: http://localhost/national/");
		}else{
			$message1 = "Sorry you have entered Invalid user name or password";
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div class="login-page">
		<div class="form">
			<form action="signup.php" method="post" class="register-form">
				<input type="text" name="username" placeholder="User Name" required="">
				<input type="password" name="password" placeholder="password" required="">
				<input type="text" name="email" placeholder="email id">
				<input type="number" name="mobile" placeholder="Mobile Number" required="">
				<label for="cars" style="font-size: 25px;">Choose your Department:</label>
				<select class="select_class" text="text" name="department" required="">
					<optgroup label="Department">
						<option>Civil</option>
						<option>Computer</option>
						<option>Mechanical</option>
						<option>Electrical</option>
						<option>Electronics</option>
						<option>Architecture</option>
					</optgroup>
					
				</select>
				<select class="select_class" type="option" name="semester" id="cars" required="">
				  <optgroup label="Civil">
				  	<optgroup label="1st semester">
					    <option value="1st - A">1st-CT-A</option>
					    <option value="1st - B">1st-CT-B</option>				  		
				  	</optgroup>
				  	<optgroup label="2nd semester">
					    <option value="2nd - A">2nd-CT-A</option>
					    <option value="2nd - B">2nd-CT-B</option>				  		
				  	</optgroup>
				  	<optgroup label="3rd semester">
					    <option value="3rd - A">3rd-CT-A</option>
					    <option value="3rd - B">3rd-CT-B</option>				  		
				  	</optgroup>
				  	<optgroup label="4th semester">
					    <option value="4th - A">4th-CT-A</option>
					    <option value="4th - B">4th-CT-B</option>				  		
				  	</optgroup>
				  	<optgroup label="5th semester">
					    <option value="5th - A">5th-CT-A</option>
					    <option value="5th - B">5th-CT-B</option>				  		
				  	</optgroup>
				  	<optgroup label="6th semester">
					    <option value="6th - A">6th-CT-A</option>
					    <option value="6th - B">6th-CT-B</option>				  		
				  	</optgroup>	
				  	<optgroup label="7th semester">
					    <option value="7th - A">7th-CT-A</option>
					    <option value="7th - B">7th-CT-B</option>				  		
				  	</optgroup>	
				  	<optgroup label="8th semester">
					    <option value="8th - A">8th-CT-A</option>
					    <option value="8th - B">8th-CT-B</option>				  		
				  	</optgroup>			  	
				  </optgroup>
				  <optgroup label="Computer">
				  	<optgroup label="1st semester">
				  		<option value="1st - A">1st - A</option>
				    	<option value="1st - B">1st - B</option>
				  	</optgroup>
				  	<optgroup label="2nd semester">
				  		<option value="2nd - A">2nd - A</option>
				    	<option value="2nd - B">2nd - B</option>
				  	</optgroup>
				  	<optgroup label="3rd semester">
				  		<option value="3rd - A">3rd - A</option>
				    	<option value="3rd - B">3rd - B</option>
				  	</optgroup>
				  	<optgroup label="4th semester">
				  		<option value="4th - A">4th - A</option>
				    	<option value="4th - B">4th - B</option>
				  	</optgroup>	
				  	<optgroup label="5th semester">
				  		<option value="5th - A">5th - A</option>
				    	<option value="5th - B">5th - B</option>
				  	</optgroup>
				  	<optgroup label="6th semester">
				  		<option value="6th - A">6th - A</option>
				    	<option value="6th - B">6th - B</option>
				  	</optgroup>	
				  	<optgroup label="7th semester">
				  		<option value="7th - A">7th - A</option>
				    	<option value="7th - B">7th - B</option>
				  	</optgroup>
				  	<optgroup label="8th semester">
				  		<option value="8th - A">8th - A</option>
				    	<option value="8th - B">8th - B</option>
				  	</optgroup>			    
				  </optgroup>
				</select>
				<button name="submit">create</button>
				<p class="message">Already Registered?<a href="#">Login</a></p>
			</form>
			<form action="signup.php" method="post" class="login-form">
				<input type="text" name="lusername" placeholder="user name" required="">
				<input type="password" name="lpassword" placeholder="password" required="">
				<button name="login">Login</button>
				<p class="message">Not Registered?<a href="#">Register</a></p>
			</form>
		</div>
	</div>
	<script src="'http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

	<script>
		$('.message a').click(function(){
			$('form').animate({height: "toggle",opacity: "toggle"}, "slow");
		});
	</script>
</body>
</html>