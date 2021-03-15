<!DOCTYPE html>
<html>

	<body id="body">
		<section class="sectionLogin">
			<div class="containner-login">
				
				<h2 class="title-login">Login</h2>
				
				<form class="form-login" action="controller/Controller_login.php" method="post">
				
				<label class="login-user">User name:</label>
				<div class="user-containner">
					<span class="icon-user"></span><input type="text" name="user-name" placeholder="User name" required>
				</div>
				
				<label class="login-pass">Password:</label>
				<div class="Password-containner">
					<span class="icon-key"></span><input type="Password" name="Password-login" placeholder="Password" required>
				</div>	
				
					<button name="submit" type="submit" class="submit-login">Login</button>
					<span class="psw-login">Forgot:<a href="#">password?</a></span>
				</form>
			
			</div>
		</section>
	</body>
	
	<script src="asset/javascript/main.js"></script>
</html>