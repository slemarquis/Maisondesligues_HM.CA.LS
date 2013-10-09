<?php
//La ligne ci dessous appelle la fonction servant à aller chercher la liste des joueurs dans la BDD
$lesJoueurs=$pdo->getLesJoueurs();
include ("vues/v_liste_joueur.php");
//Test pour voir si la requete et la fonction ont marché correctement
//echo var_dump($lesJoueurs);
?>