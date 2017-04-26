<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 2 Exercice 8</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p><?php 
//initialisation d'une variable de type booléen:
        $myVariable = true;
//transformation d'une condition ternaire en condition if/else sauf qu'avec un booléen, on a pas besoin de spécifier sa nature. Lorsqu'il s'agit de false, pour le vérifier, on utilise simplement !
        if ($myVariable) {
//alors :
            echo 'c\'est ok !!';
//sinon
        }else {
// on affiche ceci :
            echo 'c\'est pas bon !!!';
        }
        ?></p>
</html>