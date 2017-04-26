<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 2 Exercice1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="newcss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
//initialisation d'une variable age:       
        $age = 28;
        ?>
        <h1>Êtes vous mineur ou majeur ?</h1>
        <p><?php 
//condition if/else. Si la variable age est plus grand que 18, on affiche :
            if ($age >= 18) {
                echo 'Vous êtes majeur';
//sinon, on affiche :
            }else {
                echo 'Vous êtes mineur';
            }
        ?></p>
    </body>
</html>