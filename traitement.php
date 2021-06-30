<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(isset($_POST['matricule'],$_POST['description']))
{
    $unsafe_matricule = (int)$_POST['matricule'];
    $unsafe_Tache = htmlspecialchars($_POST['description']);

}
require 'connexiondb.php';
$pdo=creerPDO();

$requete_SQL = "UPDATE examen.Personne SET Tache=:tache WHERE Matricule=:matricule";
$pdo_statement = $pdo->prepare($requete_SQL);
$pdo_statement->execute(['tache'=>$unsafe_Tache,'matricule'=>$unsafe_matricule]);
if($pdo_statement->rowCount()===1)
{
    echo '<b>Modification effectué avec succès. </b>';
    echo '<a href="index.php">Retour à la page Web initiale</a>';
}
else
{
    echo '<b>Une erreur s\'est produite. </b>';
    echo '<a href="index.php">Retour à la page Web initiale</a>';

}
?>
</body>
</html>