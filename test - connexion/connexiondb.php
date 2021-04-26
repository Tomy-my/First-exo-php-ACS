<!-- 
	
	OpenClassRoom


-- EXO 1 -->

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=connexion;charset=utf8', 'root', '');     // Je me connecte en PDO à ma base de donnée MySql
}
catch (Exception $e)     // Si il y a une erreur
{
        die('Erreur : ' . $e->getMessage());     // Alors ca me retourne un message m'informant la provenance de cette erreur Exemple : Base 'Connexionn' inconnue | Un n en trop à la fin et se n'est plus la bonne base de donnée 
}

$reponse = $bdd->query('SELECT* FROM jeux_video');     // On créé une requette SQL "query" qui dit 'Selectionne TOUS dans la table jeux_video'

while ($donnees = $reponse->fetch())     // Ensuite on fait une boucle qui récupère une nouvelle entrée qui la place dans $donnees  "Fetch = va chercher" 

{     // On ouvre la boucle et on écris nos echo à l'interieur 

?>

<p>
<strong>Jeu</strong> : <?php echo $donnees['nom']; ?> <br>
Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> € <br>
Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au max<br>
<?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?>
: <em><?php echo $donnees['commentaires']; ?></em>
</p>

<?php
}     // On ferme la boucle

$reponse->closeCursor();      //Permet de terminer le traitemant de la requette SQL 

?>



<!-- EXO 2 -->

<?php

$reponse2 = $bdd->query('SELECT nom FROM jeux_video'); // Cette fois-ci dans cette requette on selectionne seulement la colonne NOM au lieu de prendre toutes la table

while ($donnees2 = $reponse2->fetch())
{
	echo '<h1>' . $donnees2['nom'] . '</h1><br />';
}

$reponse2->closeCursor();

?>

<!-- EXO 3 -->

<?php 

$reponse3 = $bdd->query('SELECT * FROM jeux_video WHERE possesseur=\'Patrick\' AND prix < 20');  // Dans la requette nous voulons sélectionner tous les champs de la table jeux_video lorsque le champ Possesseur est égal à Patrick

while ($donnees3 = $reponse3->fetch() )
{
	echo $donnees3['nom'] . ' appartient à ' . $donnees3['possesseur'] . '<br><br>';
}

$reponse3->closeCursor();
?>

<!-- EXO 4 -->

<?php

$reponse4= $bdd->query('SELECT nom, prix FROM jeux_video ORDER BY prix'); // Sélectionner tous les champs de jeux_video et ordonner les résultats par prix croissant || en ajoutant DESC à la fin, le classement sera alors par ordre décroissant

while ($donnees4 = $reponse4->fetch())
{
	echo $donnees4['nom'] . ' coute ' . $donnees4['prix'] . '€ <br>'; 
}

$reponse4->closeCursor();

?>

<!-- EXO 45-->

<?php

$reponse5 = $bdd->query('SELECT nom FROM jeux_video LIMIT 0, 10'); // Sélectionner les 10 premiers jeux de la table

while ($donnees5 = $reponse5->fecth())
{
	echo $donnees['nom'] . '<br>';
}

$reponse5->closeCursor();

?>

