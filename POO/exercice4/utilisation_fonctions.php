<?php
/**
 * Created by PhpStorm.
 * User: KAB1VX2
 * Date: 24/11/2017
 * Time: 16:28
 */

require 'Calculator.php';

$a= 10;
$b=5;

echo "<h1>".$a."+".$b."=".Calculator::addition($a,$b)."</h1>";
echo "<h1>".$a."-".$b."=".Calculator::soustraction($a,$b)."</h1>";
echo "<h1>".$a."*".$b."=".Calculator::multiplication($a,$b)."</h1>";
echo "<h1>".$a."puissance".$b."=".Calculator::puissance($a,$b)."</h1>";
echo "<h1> reste divisition de :".$a."et".$b."=".Calculator::reste_division($a,$b)."</h1>";

?>