<?php

/**
 * Created by PhpStorm.
 * User: KAB1VX2
 * Date: 24/11/2017
 * Time: 16:19
 */
class Calculator
{
    public static function addition($a,$b){
        return $a+$b;
    }
    public static function soustraction($a,$b){
        return $a-$b;
    }

    public static function multiplication($a,$b){
        return $a*$b;
    }

    public static function puissance($a,$b){
        return pow($a,$b);
    }

    public static function reste_division($a,$b){
        return fmod ( $a , $b);
    }

}
