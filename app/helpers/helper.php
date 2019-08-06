<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
    public static function thainum(string $string)
    {
             $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
            $numarabic = array("1","2","3","4","5","6","7","8","9","0");
            $numthais = str_replace($numarabic,$numthai,$string);
        return $numthais;
    }
}