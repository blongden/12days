<?php

namespace spec;

use PHPSpec2\ObjectBehavior;

class CalcStats extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(array(6, 9, 15, -2, 92, 11));
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('CalcStats');
    }

    function it_should_be_able_to_identify_the_minimum_value()
    {
        $this->getMinimum()->shouldBe(-2);
    }

    function it_should_be_able_to_identify_the_maximum_value()
    {
        $this->getMaximum()->shouldBe(92);
    }

    function it_should_be_able_to_return_the_number_of_elements()
    {
        $this->getNumberOfElements()->shouldBe(6);
    }

    function it_should_return_the_average_value()
    {
        $this->getAverage()->shouldBe(21.833333);
    }
}
