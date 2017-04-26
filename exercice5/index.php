<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 2 Exercice5</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p><?php 
//initialisation d'une variable de type chaine de caractères :
        $maVariable = 'Homme';
//transformation d'une condition ternaire en condition if/else. Si, la variable est différente de la chaine de caractères 'Homme'
        if ($maVariable != 'Homme') {
//alors :
            echo 'C\'est une développeuse !!!';
//sinon
        }else {
// on affiche ceci :
            echo 'C\'est un développeur !!!';
        }
        ?></p>
</html>