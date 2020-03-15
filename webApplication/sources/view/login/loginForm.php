<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="../../loginAuth.php" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
				<?php
					if(isset($_SESSION['nao_autenticado'])):
				?>
				<div class="authError" style="height: 50px; background-color: #e74c3c; color: #ecf0f1; border-radius: 5px;">
					<div class="text" style="padding-top: 12px">
						<strong>Erro:</strong> login ou senha inválido.
					</div>
				</div>
				<?php
					endif;
					unset($_SESSION['nao_autenticado']);
				?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input name="user" type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input name="password" type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
				<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>