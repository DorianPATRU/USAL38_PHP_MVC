<?php

/* 2.A 

$nb1 = 5;
$nb2 = 3;

function getSum($nb1, $nb2) {
    return $nb1 + $nb2;
} // retourne 8

echo getSum($nb1, $nb2);

*/ 

/* 2.B

$nb1 = 5;
$nb2 = 3;

function getSub1($nb1, $nb2) {
    return $nb1 - $nb2;
} // retourne 2

echo getSub1($nb1, $nb2);

$nb3 = 3;
$nb4 = 5;

function getSub2($nb3, $nb4) {
    return $nb3 - $nb4;
} // retourne -2

echo getSub2($nb3, $nb4);

*/

/* 2.C

$nb1 = 5.6;
$nb2 = 3;

function getMulti1($nb1, $nb2) {
    return $nb1 * $nb2;
} // retourne 16.8

echo getMulti1($nb1, $nb2);

$nb3 = 5.6;
$nb4 = -3.7;

function getMulti2($nb3, $nb4) {
    return $nb3 * $nb4;
} // retourne -20.72

echo getMulti2($nb3, $nb4);

*/

/* 2.D

$nb1 = 20;
$nb2 = 3;

function getDiv1($nb1, $nb2) {
    return (round($nb1 / $nb2, 2));
} // retourne 8.33 (erreur) --> 6.67

echo getDiv1($nb1, $nb2);

$nb3 = 20;
$nb4 = 0;

function getDiv2($nb3, $nb4) {
    if ($nb3 / $nb4 = 0) {
        return 0;
    }
} // retourne 0

echo getDiv2($nb3, $nb4);

*/

// 0 s'affiche dans la console mais il y a le message "warning division par 0" en plus, 
// je n'ai pas trouver la solution pour le moment