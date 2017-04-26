<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Partie 2 Exercice4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.</h1>
        <p><?php 
//initialisation d'une variable magnitude :
        $magnitude = 9;
//utilisation de la condition switch, condition à tiroir qui prend en paramètre la variable magnitude
        switch($magnitude)
        {
            //si magnitude est à 1
            case 1:
                //on affiche :
                echo 'Micro-séisme impossible à ressentir.';
            //break permet à PHP de sortir de la condition switch
            break;
            //si magnitude est à 2
            case 2:
                //on affiche :
                echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
            break;
            //si magnitude est à 3
            case 3:
                //on affiche :
                echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
            break;
            //si magnitude est à 4
            case 4:
                //on affiche :
                echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
            break;
            //si magnitude est à 5
            case 5:
                //on affiche :
                echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
            break;
            //si magnitude est à 6
            case 6:
                //on affiche :
                echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
            break;
            //si magnitude est à 7
            case 7:
                //on affiche :
                echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
            break;
            //si magnitude est à 8
            case 8:
                //on affiche :
                echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
            break;
            //si magnitude est à 9
            case 9:
                //on affiche :
                echo 'Séisme capable de tout détruire sur une très vaste zone.';
            break;
            default:
                echo 'Tout va pour le mieux';
        }
        ?></p>
</html>