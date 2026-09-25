
<DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF8">
</head>
<style>
nav ul{
list-style: none;
display: flex;
justify-content: justify;
}
</style> 
<body>
	<header>
	<nav>
		<ul>
			<li><a href="recherche.php">Recherche</a></li>
			<li><a href="liste.php">Liste des étudiants</a></li>
		</ul>
	</nav>
	</header>


	<h1>Inscription étudiant</h1>
	<form method="POST" action="traitement.php">
		<label>Nom :</label>
		<input type="text" name="nom">

		<br><br>

		<label>Prénom :</label>
		<input type="text" name="prenom">

		<br><br>

		<label>Âge :</label>
		<input type="number" name="age">
		
		<br><br>

		<label>Email :</label>
		<input type="email" name="email">
		
		<br><br>
		
		<label>Classe :</label>
		<input type="text" name="classe">
		
		<br><br>

		<button type="submit">Envoyer</button>
	</form>
	<p><a href="liste.php">Voir la liste des étudiants</a></p>
</body>
</html>

