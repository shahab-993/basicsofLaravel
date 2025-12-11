<?php

namespace App\Filters;
use Illuminate\Support\Number;

class CustomFilters
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public static function firstFiveUpper($value){
        return strtoupper(substr($value,0,5));
    }
    public static function firstNUpper($value,$n){
        return strtoupper(substr($value,0,$n));
    }
    public static function lenthLimit($value,$limit){
        return strlen($value)>$limit? substr($value,0,$limit).'....':$value;
    }

    public static function rating($value){
        $rating= floatval($value);
        if($rating >= 4){
            return $value .'[Excellent]';
        }elseif($rating>=3){
            return $value .'[Very Good]';
        }elseif($rating>=1.5){
            return $value .'[Average]';
        }
        else{
            return $value.'[Poor]';
        }
    }

    public static function convertNumberToWords($value,$locale){
        $words=Number::spell($value,locale:$locale);
        return ($words);
    }

    public static function convertNumberToCurrency($value,$currencycode){
        $salary=Number::currency($value,$currencycode);
      return($salary);
    }







}

