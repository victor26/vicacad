<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta charset="UTF-8" />

<link rel="stylesheet" type="text/css" href="resetlog.css">
<link rel="stylesheet" type="text/css" href="structurelog.css">
</head>

<body>
<form class="box login" action="../Controlador/loginController.php" method="post">
	<fieldset class="boxBody">
	  <label>Login</label>
	  <input type="text" tabindex="1" placeholder="Login" name="login" required>
	  <label>Senha</label>
	  <input type="password" tabindex="2"  placeholder="Senha" name="senha"required>
	</fieldset>
	<footer>
        
           <input type="submit" class="btnLogin" value="Login" tabindex="4">
	</footer>
</form>
</body>
</html>
