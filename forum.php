<?php
session_start(); // On démarre la session AVANT toute chose
$_SESSION['login'];
$_SESSION['pass'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Forum - CatchLife™</title>
</head>
<body>

	<?php include('menu.php'); ?>

	<div class="titlesection">
		<h1>Forum</h1>
	</div>

	<div class="labelconnexion">
		<?php if (isset($_SESSION['login']) AND htmlspecialchars($_SESSION['pass'] == '123456789'))
			{
				echo '<p>Vos messages apparaiteront sous le pseudo de "<strong>' . htmlspecialchars($_SESSION['user']) . '</strong>" :</p>' ;
				$bdd = new PDO('mysql:host=localhost;dbname=logs', 'root', '');
				$reponse = $bdd->query('SELECT pseudo, message FROM logs ORDER BY ID DESC LIMIT 0,10');

				while ($donnees = $reponse->fetch()) 
					{
						echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
					}

						$reponse->closeCursor();
					}
				else
					{
						echo '<p>Veuillez vous connecter pour voir votre flux d\'actualité !</p>' ;
					}
			?>
	</div>

	<div class="inscription">
			<form action="minichat_post.php" method="POST">
				<input type="text" name="message">
				<input type="submit" name="submit">
			</form>
	</div>

</body>
</html>