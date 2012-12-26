<?php

class CalcStats
{
    protected $sequence = array();

    function __construct(array $sequence)
    {
        $this->sequence = $sequence;
    }

    public function getMinimum()
    {
        return min($this->sequence);
    }

    public function getMaximum()
    {
        return max($this->sequence);
    }

    public function getNumberOfElements()
    {
        return count($this->sequence);
    }

    public function getAverage()
    {
        return round(array_sum($this->sequence) / count($this->sequence), 6);
    }
}
