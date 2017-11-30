<?php
/**
 * Created by PhpStorm.
 * User: KAB1VX2
 * Date: 30/11/2017
 * Time: 09:27
 */

require 'TaxIncludedCalculator.php';

$a= 10;
$b=5;
$taxe=10;

echo "<h1>".$a."+".$b."+ taxe".$taxe."=".TaxIncludedCalculator::addition_taxe($a,$b,$taxe)."</h1>";
echo "<h1>".$a."-".$b."+ taxe".$taxe."=".TaxIncludedCalculator::soustraction_taxe($a,$b,$taxe)."</h1>";
echo "<h1>".$a."*".$b."+ taxe".$taxe."=".TaxIncludedCalculator::multiplication_taxe($a,$b,$taxe)."</h1>";
echo "<h1>".$a."puissance".$b."+ taxe".$taxe."=".TaxIncludedCalculator::puissance_taxe($a,$b,$taxe)."</h1>";
echo "<h1> reste divisition de :".$a."et".$b."+ taxe".$taxe."=".TaxIncludedCalculator::reste_division_taxe($a,$b,$taxe)."</h1>";

?>