<!DOCTYPE html>
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
		<link rel="shortcut icon" href="asset/image/logo.png" >
		<link rel="stylesheet"    href="asset/styles/iconos.css">
		<link rel="stylesheet"    href="asset/styles/Normalize.css"> 
		<link rel="stylesheet"    href="asset/styles/Login-Register.css"> 
		<title>Picture</title>
</head>

<body id="body">
	<section class="sectionRegister">
		<div class="containner-Register">
			
		<h2 class="title-Register">Register</h2>
		
	<form class="form-Register" action="../controller/Controller_register.php" method="post">
			
		<div class="area-name">
		
				
			<div class="frist-name">
				<label class="Register-user">First name:</label>	
				<!-- <span class="icon-user-tie"></span> -->
				<input class="input-data" type="text" name="first-name" placeholder="First name" required>
			</div>
			
			
			<div class="secon-name">
			<label class="Register-user">Last name:</label>
				<!-- <span class="icon-user"></span> -->
				<input class="input-data" type="text" name="Last-name" placeholder="Last name" required>
			</div>
		
		</div>			
					
			<label class="Register-user">User name:</label>
			<div class="user-containner">
				<!-- <span class="icon-user"></span> -->
				<input class="input-data" type="text" name="user-name" placeholder="User name" required>
			</div>
			
			<label class="Register-Email">Email:</label>
			<div class="user-containner">
				<!-- <span class="icon-mail2"></span> -->
				<input class="input-data" type="text" name="Email" placeholder="User name" required>
			</div>
			
			<label class="Register-pass">Password:</label>
			<div class="Password-containner">
				<!-- <span class="icon-key"></span> -->
				<input class="input-data" type="Password" name="Password" placeholder="Password" required>
			</div>	
			
			<label class="Register-pass">Password:</label>
			<div class="Password-containner">
				<!-- <span class="icon-key"></span> -->
				<input class="input-data" type="Password" name="Re-Password" placeholder="Password" required>
			</div>	
			<!--<div class="boton-area">-->
				<button  class="btn cancel">Cancel</buttcn>
				<button name="submit" type="submit" class=" btn submit-Register">Register</button>
			<!--</div>-->
		</form>
		
		</div>
	</section>


</body>
<script src="asset/javascript/main.js"></script>
</html>
