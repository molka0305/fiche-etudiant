<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche étudiant</title>
    <link rel="stylesheet" href="formulaire.css">
</head>
<body>

<?php
$nom = "Maram Rajhi";
$filiere = "Management";
$annee = "3 ème année";
$moyenne = 13.30;
$mention = "Assez Bien";
$rang = "11ème";
$statut = "Admis(e)";
$bourse = "🎓 Boursier";
?>

<div class="student-card">
    <h1>Fiche étudiant</h1>
    <div class="info">
        <strong>Nom complet :</strong>
        <?php echo $nom; ?>
    </div>
    <div class="info">
        <strong>Filière :</strong>
        <?php echo $filiere; ?>
    </div>
    <div class="info">
        <strong>Année d'étude :</strong>
        <?php echo $annee; ?>
    </div>
    <div class="info">
        <strong>Moyenne :</strong>
        <?php echo $moyenne; ?> / 20
    </div>
    <div class="info">
        <strong>Mention :</strong>
        <?php echo $mention; ?>
    </div>
    <div class="info">
        <strong>Rang :</strong>
        <?php echo $rang; ?>
    </div>
    <div class="info">
        <strong>Statut :</strong>
        <?php echo $statut; ?>
    </div>
    <div class="info">
        <?php echo $bourse; ?>
    </div>
</div>

</body>
</html>