<?php
session_start();

if(isset($_SESSION["login"])){
	header("location: dashboard.php");
	exit;
}
include "conection.php";


if(isset ($_POST["submit"])){
    $name = $_POST["name"];
    $pw = $_POST["pw"];
	$get_user = "SELECT * FROM user WHERE name = '$name'";
	$result = mysqli_query($conn,$get_user);
	
	$data = mysqli_fetch_array($result);
	if($data){

		if($pw == $data['pw']){
			// set session
			$_SESSION["login"]= true;

			Header("Location: dashboard.php");
            exit;
		}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<svg viewBox="0 0 1320 300">
	<text x="50%" y="50%" dy=".35em" text-anchor="middle">
		LOGIN ADMIN
	</text>
</svg>
    <!-- <h1>LOGIN ADMIN</h1> -->
<div class="login-container">
	
	<form action="" method="POST" autocomplete="off"class="form-login" >
		<ul class="login-nav">
			<li class="login-nav__item active">
				<a href="#"><i class="fad fa-biohazard" style="font-size:1.5em;"></i></a>
			</li>
		</ul>
		<label for="name" class="login__label"><i class="fas fa-user-tie" style="color:#fff;"></i>
			Username
		</label>
		<input id="name" class="login__input" type="text" name="name" placeholder="Admin" />

		<label for="pw" class="login__label"><i class="fas fa-key" style="color:#fff;"></i>
			Password
		</label>
		<input id="pw" class="login__input" type="password" name="pw" placeholder="••••••••••••"/>
		<br>
		<button class="login__submit" type="submit" name="submit" id="submit">Login<i class="fad fa-sign-in"></i></button>
	</form>
	<div class="login__forgot"><p>DEVELOP BY JaVa Alien</p>
	<a href="index.php">Back To Home</a></div>
</div>
</body>
</html>
