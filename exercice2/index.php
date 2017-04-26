<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 2 Exercice2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php 
//initialisation d'une variable booléenne
        $isEasy = true;
        ?>
        <p id="green"><?php 
//condition if/else. Si isEasy est vraie, on affiche : 'c'est facile'
        if ($isEasy == true) {
            echo 'C\'est facile';
//Sinon, on affiche : c'est difficile
        }else {
            echo 'C\'est difficile';
        }
        ?></p>
        <p id="red"><?php
//condition ternaire.
            echo ($isEasy == false) ? 'C\'est facile' : 'C\'est difficile';
        ?></p>
    </body>
</html>