<?php

/**
 * Created by PhpStorm.
 * User: KAB1VX2
 * Date: 24/11/2017
 * Time: 16:46
 */
require "Calculator.php";
class TaxIncludedCalculator extends Calculator
{
    public static function addition_taxe($a, $b,$taxe)
    {
        return (parent::addition($a, $b)*$taxe)/100; // TODO: Change the autogenerated stub
    }

    public static function soustraction_taxe($a, $b,$taxe)
    {
        return (parent::soustraction($a, $b)*$taxe)/100; // TODO: Change the autogenerated stub
    }

    public static function puissance_taxe($a, $b,$taxe)
    {
        return (parent::puissance($a, $b)*$taxe)/100; // TODO: Change the autogenerated stub
    }

    public static function multiplication_taxe($a, $b,$taxe)
    {
        return (parent::multiplication($a, $b)*$taxe)/100; // TODO: Change the autogenerated stub
    }

    public static function reste_division_taxe($a, $b,$taxe)
    {
        return (parent::reste_division($a, $b)*$taxe); // TODO: Change the autogenerated stub
    }


}