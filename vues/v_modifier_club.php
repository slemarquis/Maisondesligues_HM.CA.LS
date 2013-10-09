<?php

	/*echo "hello world vue modifier club";
	echo "<br />";
	echo "<br />";
	echo "<br />";*/
	
	
	foreach($leClub as $value){
        $idC = $value['idClub'];
        $nomC = $value['nomClub'];
        $adrC = $value['adresseClub'];
        $cpC = $value['cpClub'];
        $villeC = $value['villeClub'];
        $telC = $value['telClub'];
        $mailC = $value['mailClub'];

		
?>


<?php echo "Modifier le club ".$idC."";?>
<fieldset>
			
<?php
		
		echo "<table border='1'>";
		
			echo "<tr>";
				echo "<td>";
					echo "Nom :";
				echo "</td>";
				
				echo "<td align=right>";
					echo "<input type='text' value='".$nomC."'/>";
				echo "</td>";
			echo "</tr>";
			
			
			echo "<tr>";
				echo "<td>";
					echo "Adresse :";
				echo "</td>";
				
				echo "<td align=right>";
					echo "<input type='text' value='".$adrC."'/>";
				echo "</td>";
			echo "</tr>";
			
			
			echo "<tr>";
				echo "<td>";
					echo "Code Postale :";
				echo "</td>";
				
				echo "<td align=right>";
					echo "<input type='text' value='".$cpC."' size=5/>";
				echo "</td>";
			echo "</tr>";
			
			
			echo "<tr>";
				echo "<td>";
					echo "Ville du club :";
				echo "</td>";
				
				echo "<td align=right>";
					echo "<input type='text' value='".$villeC."'/>";
				echo "</td>";
			echo "</tr>";
			
			
			echo "<tr>";
				echo "<td>";
					echo "Téléphone du Club :";
				echo "</td>";
				
				echo "<td align=right>";
					echo "<input type='text' value='".$telC."'/>";
				echo "</td>";
			echo "</tr>";
			
			
			echo "<tr>";
				echo "<td>";
					echo "Mail du Club :";
				echo "</td>";
				
				echo "<td align=right lenght=50>";
					echo "<input type='text' value='".$mailC."'/>";
				echo "</td>";
			echo "</tr>";
			
		echo "</table>";
		echo "<br />";
?>

		<br />
		<a href="index.php?uc=gerer_club&idClub=<?php echo $idC?>&action=valideUpdate">VALIDER</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="index.php?uc=gerer_club&action=voirClub">RETOUR</a>
		</form>
</fieldset>
	
<?php
    }
?>