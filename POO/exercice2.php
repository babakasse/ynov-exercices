<?php
/**
 * Created by PhpStorm.
 * User: KAB1VX2
 * Date: 24/11/2017
 * Time: 14:35
 */

require 'Triangle.php'; // J'inclus la classe Triangle.

$_Triangle_Rectangle = new Triangle(5,3,4);

$_Triangle_Equilateral = new Triangle(5,5,5);

$_Triangle_Isocele = new Triangle(5,3,5);

$_Triangle_scalene = new Triangle(5, 4, 2);

if($_Triangle_Rectangle->est_recatangle()){
    echo '<h1>Ouf !! le premier est rectangle</h1>';
}

if($_Triangle_Isocele->est_isocelle()){
    echo '<h1>le deusieme est vraiment isocele </h1> ';
}

if($_Triangle_scalene->est_scaléne()){
    echo '<h1>C est cool le troisieme est scalene </h1>';
}

if($_Triangle_Equilateral->est_equilateral()){
    echo '<h1>Et enfin le dernier est bel et bien equilateral </h1>';
}

?>