<?php

namespace Neelkanthk\UnitConversions\Tests;

use Neelkanthk\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kgs_to_lbs()
    {
        $lbs = Weight::fromKgs(100)->toLbs();
        $this->assertEquals(220.4623, $lbs);
    }
}
