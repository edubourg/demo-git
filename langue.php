<html>

<h1>Votre langue</h1>


<ul>
	<li><a href="?pays=fr">France</a></li>
	<li><a href="?pays=es">Espagne</a></li>
	<li><a href="?pays=en">Angleterre</a></li>
	<li><a href="?pays=it">Italie</a></li>
	<li><a href="?pays=it">Allemagne</a></li>
</ul>

</html>

<?php

// echo '<pr>';
// print_r($_SERVER);
// echo '</pr>';

// echo '<ul>';
// foreach ($_SERVER as $indice => $valeur) {
	// echo '<li>' . $indice . ' => ' . $valeur . '</li>';
	// $indice++;
 // }			
// echo '</ul>';

// echo substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0 , 2);

if(isset($_GET['pays'])) // est-ce qu'il y a un pays passé dans l'URL ? Si oui met l'info dans la variable pays
{
	$pays = $_GET['pays']; 
}
elseif(isset($_COOKIE['pays'])) // est-ce qu'il y a un cookie existant qui définit la langue. Si oui mise de l'info dans $pays
{
	$pays = $_COOKIE['pays']; // $_COOKIE est une superglobale.
}
else { // si pas de cookie pas de paramètre dans l'url, je mets 'fr' dans la variable pays
	$pays = 'fr';
}

// Timestamp - nombre de secondes écoulées depuis le 1er janvier 1970
//echo time();

$un_an = 365*24*3600; // nombre de seconde dans une année.
setCookie("pays", $pays, time()+$un_an); 
// la fonction setCookie permet de créer un cookie sur le poste de l'utilisateur. 3 arguments: son nom / sa valeur / sa durée de vie
// on évite de mettre dans un cookie prix, mot de passe

print_r($_COOKIE);

switch($pays)
{
	case 'fr':
		echo '<p><b>Bonjour</b><br /> Vous visitez actuellement le site en français</p><hr />';
	break;

	case 'es':
		echo '<p><b>Hola</b><br /> Esta visantando el sitio en espanol</p><hr />';
	break;

	case 'en':
		echo '<p><b>Hello</b><br /> You\'re visiting this website in english </p><hr />';
	break;

	case 'it':
		echo '<p><b>Ciao</b><br /> Sta visitando il sitio in italiano</p><hr />';
	break;

	default:
		echo '<p><b>Langue non disponible</b><hr /></p>';
	break;
}





?>