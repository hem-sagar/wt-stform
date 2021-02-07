<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
    
    </style>

</head>
<body>
    <div>
    <H1>Welcome to student registration form</H1>
    <p>This is the Home page from where you can login/signup.</p>

<?php
include("server.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password1'];

	if($user == "" || $pass == "" || $name == "" || $email == "") {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
	} else {
		mysqli_query($db, "INSERT INTO register(name, email, username, password1) VALUES ('$name', '$email', '$user', '$pass')")
			or die("Could not execute the insert query.");
			
		echo "Registration successfully";
		echo "<br/>";
		echo "<a href='login.php'>Login</a>";
	}
} else {
?>
    <div style="margin : 30px; padding:30px;">    
        <form name="form1" class="row g-3 needs-validation" novalidate method="post">
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label" >Name</label>
            <input type="text" class="form-control" id="validationCustom01" name="name" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="mb-4">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-md-4">
                <input type="email" name="email" class="form-control" id="inputEmail4">
            </div>
        </div>
        <!-- <div class="row">
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">City</label>
            <input type="text" name="city" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
            Please provide a valid city.
            </div>
        </div>
        </div> -->
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" name="username" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
            </div>
        </div>
        
        <div class="col-md-4">
        <label for="inputPassword" class="form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" name="password1" class="form-control" id="inputPassword">
        </div>
        </div>
        
        
        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="submit" value="Submit">Register</button>
        </div>
        </form>
    </div>
 <?php   
}
?>


    <a href="login.php">Already Registered?</a>
    </div>

<!-- <a href="index.php">Home</a>
<a href="register.php">register</a> -->
<script src="custom.js"></script>
</body>
</html>