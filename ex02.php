<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 02 - PHP</title>
</head>
<body>

    <h1>Exercice 2 : Variables et Concaténation</h1>

    <?php
        // 1. Déclaration des variables
        $nom = "Mazouz";
        $prenom = "Omar";
        $age = 20;
        $formation = "INFORMATIQUE";
        $presentation = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en formation " . $formation . ".";
        $presentation .= " J'apprends PHP.";
        echo "<p>" . $presentation . "</p>";
        $note = 12;
        $Note = 16;
        echo "<p>La valeur de note est : " . $note . "</p>";
        echo "<p>La valeur de Note est : " . $Note . "</p>";
    ?>

</body>
</html>