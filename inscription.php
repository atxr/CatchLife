		<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Connexion - CatchLife™</title>
</head>
<body>

	<?php include('menu.php'); ?>

	<div class="titleinscription">
		<h1>Connexion/Inscription</h1>
	</div>

	<div class="formulaires">
		<fieldset>
			<legend>Connexion :</legend>
				<form action="connexion.php" method="POST">
					<p>Pseudo :</p><input type="text" name="login">
					<p>Password :</p><input type="password" name="pass" required="required">
					<br><br><input type="submit" name="submit" class="button">
				</form>
		</fieldset>

		<fieldset>
			<legend>Inscription :</legend>
				<form action="" method="">
					<p>Pseudo :</p><input type="text" name="login" placeholder="Florian06">
					<p>Password :</p><input type="password" name="pass" placeholder="" >
					<p>Email</p><input type="email" name="email" required="required" placeholder="ex: ...@gmail.com">
					<br><br><input type="submit" name="submit" class="button">
				</form>
		</fieldset>
	</div>
	
	<div class="label2" id="fieldsetspace">
	</div>

	<div class="inscription">
	</div>

</body>
</html>
		
