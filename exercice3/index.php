<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 2 Exercice3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php 
//initialisation de deux variables, une de type chaine de caractères et la seconde de type nombre
        $genre = 'Homme';
        $age = 28;
        ?>
        <p><?php 
//condition if/else. 
        if (($genre == 'Homme') && ($age >= 18)) { // Si homme et age supérieur à 18
            echo 'Vous êtes un homme et vous êtes majeur'; //afficher
        }elseif (($genre == 'Homme') && ($age < 18)) { //si homme et age inférieur à 18
            echo 'Vous êtes un homme et vous êtes mineur'; //afficher
        }elseif (($genre == 'Femme') && ($age >= 18)) { //si femme et age supérieur à 18
            echo 'Vous êtes une femme et vous êtes majeur'; //afficher
        }elseif (($genre == 'Femme') && ($age < 18)) { //si femme et age inférieur à 18
            echo 'Vous êtes une femme et vous êtes mineur'; //afficher
        }
        ?></p>
    </body>
</html>