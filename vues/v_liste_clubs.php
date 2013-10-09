<a href="index.php?uc=membre&action=sommaire">RETOUR</a><br/><br/><br/>
<?php
   /* echo "hello world vue liste_clubs";
    echo "<br />";
	echo "<br />";
    echo "<br />";*/

echo "<fieldset>";
    foreach($lesClubs as $value){
        $idC = $value['idClub'];
        $nomC = $value['nomClub'];
        $adrC = $value['adresseClub'];
        $cpC = $value['cpClub'];
        $villeC = $value['villeClub'];
        $telC = $value['telClub'];
        $mailC = $value['mailClub'];


?>
	<ul>

        <form method="GET" name="FRM<?php echo $idC;?>" action="index.php">


            <INPUT type="hidden" name ="uc" value = "gerer_club"/>
            <INPUT type="hidden" name ="idClub" value = "<?php echo $idC; ?>">
            <INPUT type="hidden" name ="action" value = "modifier_club">
			
			
<?php

			echo "<input type='hidden' value='".$idC."'/>";
			echo "<input type='hidden' value='".$nomC."'/>";
			echo "<input type='hidden' value='".$adrC."'/>";
			echo "<input type='hidden' value='".$cpC."'/>";
			echo "<input type='hidden' value='".$villeC."'/>";
			echo "<input type='hidden' value='".$telC."'/>";
			echo "<input type='hidden' value='".$mailC."'/>";
			echo "<table border='1'>";
				echo "<tr>";
					echo "<td>".$nomC."</td>";
					echo "<td>".$adrC."</td>";
					echo "<td>".$cpC."</td>";
					echo "<td>".$villeC."</td>";
					echo "<td>".$telC."</td>";
					echo "<td>".$mailC."</td>";
				echo "</tr>";
			echo "</table>";
?>
			<input type="submit" value="Modifier"/>
			
		</form>
		<form method="GET" name="frm<?php echo $idC;?>" action="index.php">
		
			<INPUT type="hidden" name ="uc" value = "gerer_club"/>
            <INPUT type="hidden" name ="idClub" value = "<?php echo $idC; ?>">
			<INPUT type="hidden" name ="action" value = "supprimerClub">
			
			<input type="submit" value="Supprimer"/>
		</form>

    </ul>
<?php		
    }
	echo "</fieldset>";
?>
           