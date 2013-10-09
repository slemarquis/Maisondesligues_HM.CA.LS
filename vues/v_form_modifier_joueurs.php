<?php
$id=$unJoueur['idJou'];
$nom=$unJoueur['nomJou'];
$prenom=$unJoueur['prenomJou'];
$adresse=$unJoueur['adresseJou'];
$tel=$unJoueur['telJou'];
$club=$unJoueur['nomClub'];
$nombreClub=$lesClubs['NbClub'];

?>
<form method="POST" action="controleurs/c_modifier_joueurs.php">
    <input type="hidden" name='formulaire' value='1'>
    <?php
        echo "<input type='text' name='nom' value='".$nom."'>";
        echo "<input type='text' name='prenom' value='".$prenom."'>";
        echo "<input type='text' name='adresse' value='".$adresse."'>";
        echo "<input type='text' name='tel' value='".$tel."'>";
        echo "<select name='club' size='1'>";
        for ($i=1; $i<=$nombreClub; $i++)
        {
            echo "<option value='".$lesClubs['idClub']."'>".$lesClubs['i']['nomClub']."</option>";
        }
?>
</select>
<input type="submit" value="modifier">

</form>