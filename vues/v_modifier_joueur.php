<?php
foreach( $lesJoueurs as $unJoueur)
{
    $id = $unJoueur['id'];
    $description = $unJoueur['description'];
    ?>


    <ul>
        <form method="GET" name="FRM<?php echo $id;?>" action="index.php">

            <INPUT type="hidden" name ="uc" value = "membre"/>
            <INPUT type="hidden" name ="categorie" value = "<?php echo $categorie; ?>">
            <INPUT type="hidden" name ="produit" value = "<?php echo $id ;?>">
            <INPUT type="hidden" name ="action" value = "modif_prod">
            <li><?php echo $description ?></li>

            <input type="submit" value="Modifier"/>
            <input type="submit" value="Supprimer"/>

        </form>
    </ul>



<?php
}
?>