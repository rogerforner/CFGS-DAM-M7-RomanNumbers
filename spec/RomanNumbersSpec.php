<?php

namespace spec;

use RomanNumbers;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumbersSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumbers::class);
    }

    //per crear un altre test, fer un altra funció
    function it_returns_I_if_1()
    {
       $this->convert(1)->shouldReturn('I');
    }

    function it_returns_II_if_2()
    {
        $this->convert(2)->shouldReturn('II');
    }

    function it_returns_III_if_3()
    {
        $this->convert(3)->shouldReturn('III');
    }

    function it_returns_V_if_5()
    {
        $this->convert(5)->shouldReturn('V');
    }

    function it_returns_X_if_10()
    {
        $this->convert(10)->shouldReturn('X');
    }

}
