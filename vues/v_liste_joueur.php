<a href="index.php?uc=membre&action=sommaire">RETOUR</a><br/><br/><br/>
<table>
	<?php 
			// Cette boucle effectue la même action individuelement pour chaque ligne du tableau. Ici, elle stoque le contenu de chaque cellule de la ligne traitée, puis l'affiche dans un tableau HTML
    foreach($lesJoueurs as $i )
			{
				$nom=$i['nomJou'];
				$prenom=$i['prenomJou'];
				$adresse=$i['adresseJou'];
				$telephone=$i['telJou'];
				$club=$i['nomClub'];
				$categ=$i['nomCateg'];
                $id=$i['idJou'];
                echo var_dump($id);
			
				?>
			
				<tr>
					<td>
					<!--Affichage du résultat, ligne par ligne-->
					<?php echo $prenom."</td><td>".$nom."</td><td>".$adresse."</td><td>".$telephone."</td><td>".$club."</td><td>".$categ."><a href='index.php?uc=modifier&id=".$id."'>Modifier</a> <a href='index.php?uc=supprimer&id=".$id."'>Supprimer</a>";?>

					</td>
				</tr>
				
			<?php
			}
		?>
</table>
