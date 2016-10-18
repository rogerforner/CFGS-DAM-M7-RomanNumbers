<?php

class RomanNumbers
{
    protected $code = [
            1 => "I",
            4 => "IV",
            5 => "V",
            9 => "IX",
            10 => "X",
        ];


    public function convert($number){

        $solution = "";

        if($number == 4) {
            $solution = $this->code[$number];
            $number = 0;
        }

        $solution = $solution . str_repeat('I',$number);

        return $solution;

    }
}
