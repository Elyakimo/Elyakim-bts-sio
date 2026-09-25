
<?php
$mail = "mail@mail.mail";
?>
<?php
$age = 18;
?>
<?php
$prenom = "Elyakim";
$classe = "BTS SIO 1";
?>
<?php
$note1 = 12;
$note2 = 15;
$note3 = 18;
$moyenne = ($note1 + $note2 + $note3) / 3;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <title>Mon premier site PHP</title>
</head>
<style>
:root {
background-color: black;
color: white;
justify-content: justify;
}
</style>
<body>

      <h1>Fiche étudiant</h1>

      <p>Prénom : <?php echo $prenom; ?></p>
      <p>Classe : <?php echo $classe; ?></p>
      <p>Âge : <?php echo $age; ?> ans</p>
        <?php if ($age >= 18) { echo "<p>Statut : majeur</p>";}
   	else {echo "<p>Statut : mineur</p>";}
	?>
      <p>Mail : <?php echo $mail; ?></p>
      <p>Présentation : </p>
	<p> Jeune loup noir </p>


      <p>Note 1 : <?php echo $note1; ?></p>
      <p>Note 2 : <?php echo $note2; ?></p>
      <p>Note 3 : <?php echo $note3; ?></p>
      <p>Moyenne : <?php echo $moyenne; ?></p>
      <p>Date du jour : <?php echo date("d/m/Y"); ?></p>
      <p>Date de génération de la fiche : <?php echo date("d/m/Y"); ?></p>
</body>
</html>
