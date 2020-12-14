<?php

/*
1 : avancer
2 : reculer
3 : tourner à gauche
4 : tourner à droite
*/ /*
$cmd = 2;
if ($cmd == 1) {
    echo "J'avance";
} elseif ($cmd == 2) {
    echo "Je recule";
} elseif ($cmd == 3) {
    echo "Je tourne à gauche";
} elseif ($cmd == 3) {
    echo "Je tourne à droite";
} else {
    echo "Je ne fais rien";
}
*/

$cmd = 2;
switch($cmd) {
    case 1 : 
        echo "J'avance";
        break;
    case 2 : 
        echo "Je recule";
        break;
    case 3 : 
        echo "Je tourne à droite";
        break;
    case 4 : 
        echo "Je tourne à gauche";
        break;
    default : 
        echo "J'avance";
        break;
}


