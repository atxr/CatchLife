<?php
session_start(); // On démarre la session AVANT toute chose
$_SESSION['login'] = $_POST['login'];
$_SESSION['pass'] = $_POST['pass'];
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<head>
	<title>CatchLife™</title>
</head>


<body>

	<?php include('menu.php'); ?> 

		<div  class="titlesuccessorerror">
		<?php
			if (isset($_POST['login']) AND htmlspecialchars($_SESSION['login']) AND $_POST['pass'] == '123456789')
			{
				echo '<h1>Bravo!</h1>';
			}
			else
			{
				echo '<h1>Erreur</h1>';
			}
			?>
		</div>

	<div class="labelconnexion">
		<?php 
			if (isset($_POST['login']) AND htmlspecialchars($_SESSION['login']) AND $_POST['pass'] == '123456789')
			{
				echo '<p>Vous êtes bien connecté en tant que "' . htmlspecialchars($_SESSION['login']) .'" ! Vous pouvez vous connecter au forum..</p>';
			}
			elseif ($_POST['pass'] != '123456789')
			{
				echo '<p>Impossible de se connecter, veuillez vérifier votre utilisateur ou votre mot de passe!</p>';
			}
		?>
	</div>


</body>


</html>