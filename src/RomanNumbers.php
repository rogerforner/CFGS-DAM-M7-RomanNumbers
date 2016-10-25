<?php

class RomanNumbers
{
    protected $code = [
            1000 => "M",
            900 => "CM",
            500 => "D",
            400 => "CD",
            100 => "C",
            90 => "XC",
            50 => "L",
            40 => "XL",
            10 => "X",
            9 => "IX",
            5 => "V",
            4 => "IV",
            1 => "I",
        ];


    public function convert($number){

        $solution = "";

        foreach ($this->code as $decimal => $roman){
            if($number >= $decimal){
                $solution .= $roman;
                $number -= $decimal;
            }
        }

        return $solution;

    }
}
