<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<script src="login_validate.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	</head>

	<body>
		<div style="margin : 100px auto; width: 50%;">
					<h1 style="text-align: center;">Welcome to Student Registration Form</h1>
					<h4 style="text-align: center; margin-top: 20px;">This is the Home page where you can register/login.</h4>

		<?php
		include("server.php");

		if(isset($_POST['submit'])) {
			$user = mysqli_real_escape_string($db, $_POST['username']);
			$pass = mysqli_real_escape_string($db, $_POST['password1']);

			if($user == "" || $pass == "") {
				echo "Either username or password field is empty.";
				echo "<br/>";
				echo "<a href='login.php'>Go back</a>";
			} else {
				$result = mysqli_query($db, "SELECT * FROM register WHERE username = '$user' AND password1 = '$pass' ")
							or die("Could not execute the select query.");
				
				$row = mysqli_fetch_assoc($result);
				
				if(is_array($row) && !empty($row)) {
					$validuser = $row['username'];
					$_SESSION['valid'] = $validuser;
					$_SESSION['name'] = $row['name'];
					$_SESSION['id'] = $row['id'];
				} else {
					echo "Invalid username or password.";
					echo "<br/>";
					echo "<a href='login.php'>Go back</a>";
				}

				if(isset($_SESSION['valid'])) {
					header('Location: student.php');			
				}
			}
		} else {
		?>
			
		<div style=" width: 50%; margin: 50px auto;">    
                <form name="form2" class="row g-3 needs-validation" novalidate method="post">
                    <div class="col-md-10">
                        <label for="userName" class="form-label" >Username</label>
                        <input type="text" class="form-control" id="validationCustom01" name="username" required>
                    </div>
                    <div class="mb-2">
                        <label for="inputPass" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-md-10">
                            <input type="password" name="password1" class="form-control" id="inputpass">
                        </div>
                    </div>

                    <div class="col-12">
                        <button onclick="return validateForm()" style="margin-right: 20px" class="btn btn-primary"
                                type="submit" name="submit" value="Submit">Login</button>
                    </div>
					<a href="index.php">Don't have an account?</a>
                </form>
				
            </div>
		<?php
		}
		?>
		</div>
	</body>
</html>