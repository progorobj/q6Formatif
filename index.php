<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>EmployéEs:</h1>
<?php
require 'connexiondb.php';
$pdo = creerPDO();

$requette_SQL = ("SELECT * FROM examen.Personne");
$pdo_statement = $pdo->prepare($requette_SQL);
$pdo_statement->execute([]);
echo '<ul>';
foreach ($pdo_statement as $ligne)
{

    echo'<li>';
    echo $ligne['Prenom'].' '.$ligne['Nom'].' #'.$ligne['Matricule'].' : ';
    echo $ligne['Tache'];
    echo '</li>';

}
echo '</ul>';
?>
<form method="post" action="traitement.php">
    <p>
     <label for="idMatricule" name="lbMatricule" >Matricule de l'employéE à Modifier :</label>
     <input type="number" id="idMatricule" name="matricule"/>
    </p>
    <p>
        <label for="idDescription" name="lbDescription">Nouvelle description de tâche :</label>
        <textarea id="idDescription" name="description" rows="10" cols="60"></textarea>

    </p>
    <p>
        <input type="submit" name="modifier" value="Modifier la tâche"/>
    </p>

</form>

</body>
</html>