<?php

if ($_POST) {
	
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';

	extract($_POST);
	echo 'le nom est <b>' . $nom . '</b><br :>';
	echo 'le prénom est <b>' . $prenom . '</b><br :>';
	echo 'L\'adresse est <b>' . $adresse . '</b><br :>';
	echo 'La ville est <b>' . $ville . '</b><br :>';
	echo 'Le code postal est <b>' . $codepostal . '</b><br :>';
	if ($sexe == "m")
		{ echo 'Le sexe est <b>Homme</b><br :>'; }
	else
		{ echo 'Le sexe est <b>Femme</b><br :>'; }
		
	echo 'La description est <b>' . $description . '</b><br :>';

	foreach ($_POST as $indice => $valeur) {
		echo $indice . ' : <b> ' . $valeur . '</b><br />';
		
	}
}




?>

<html>
	<h1>Formulaire</h1>
	<form action="" method="post">
		<label>Nom </label><br />
		<input type="text" name="nom" /><br />
		<label>Prénom </label><br />
		<input type="text" name="prenom" /><br />
		<label>Adresse </label><br />
		<input type="text" name="adresse" /><br />
		<label>Adresse </label><br />
		<input type="text" name="adresse" /><br />
		<label>Ville</label><br />
		<input type="text" name="ville" /><br />
		<label> Sexe </label>
		<select name="sexe">
			<option selected value="m">Homme</option>
			<option value="f">Femme</option> <!-- France sélectionnée par défaut -->
		</select>
		<br />
		<label>Description</label><br />
		<textarea name="description" cols="20" rows="5"></textarea>
		<input type="submit" value="Enregistrer" /><br />
	</form>
</html>
