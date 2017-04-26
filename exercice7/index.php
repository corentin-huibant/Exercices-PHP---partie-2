<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 2 Exercice 7</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php 
//initialisation d'une variable de type booléen :
                $myVariable = false;
//transformation d'une condition ternaire en condition if/else.
                if ($myVariable == false) {
//alors :
                echo 'c\'est pas bon !!!';
//sinon
                }else {
// on affiche ceci :
                    echo 'c\'est ok !!';
                }
            ?>
        </p>
        <nav>
           <h2>Liens des exercices</h2>
           <ul>
               <li><a href="http://partie2exo1">Exercice 1</a></li>
               <li><a href="http://partie2exo2">Exercice 2</a></li>
               <li><a href="http://partie2exo3">Exercice 3</a></li>
               <li><a href="http://partie2exo4">Exercice 4</a></li>
               <li><a href="http://partie2exo5">Exercice 5</a></li>
               <li><a href="http://partie2exo6">Exercice 6</a></li>
               <li><a href="http://partie2exo7">Exercice 7</a></li>
               <li><a href="http://partie2exo8">Exercice 8</a></li>
           </ul>
       </nav>
</html>