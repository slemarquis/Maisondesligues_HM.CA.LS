<?php
if (isset($_POST['formulaire']))
{

}
else
{
    $id=$_GET['id'];

    $unJoueur=$pdo->getUnJoueur($id);
    echo "unJoueur";
    echo var_dump($unJoueur);
    $lesClubs=$pdo->getClubs();
    echo "<br>Les Clubs";
    echo var_dump($lesClubs);
    include("vues/v_form_modifier_joueurs.php");
}
?>