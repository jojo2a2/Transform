<?php
/**
 * Created by PhpStorm.
 * User: jozef.chladek
 * Date: 2019-04-04
 * Time: 18:46
 */

namespace Replacer;


class ReplacerController
{
    public function replace($num): string
    {
        $integerValue = intval($num);
        $result = '';
        if ($num < 0) {
            die;
        }

        $romanNumber_Array = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        );

        foreach ($romanNumber_Array as $roman => $number) {
            $matches = intval($integerValue / $number);

            $result .= str_repeat($roman, $matches);

            $integerValue %= $number;
        }

        return $result;
    }
}


