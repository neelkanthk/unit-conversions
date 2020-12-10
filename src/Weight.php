<?php

namespace Neelkanthk\UnitConversions;

class Weight
{
    private float $kgs;

    public static function fromKgs(float $kgs): self
    {
        return new static($kgs);
    }

    public function __construct(float $kgs)
    {
        $this->kgs = $kgs;
    }

    public function toLbs() : float
    {
        return $this->kgs * 2.204623;
    }
}
