<?php
use PHPUnit\Framework\TestCase;
require "Classes/RandomNumber.php";

final class RandomsTests extends TestCase{
    public function testNumbersAreRandom(): void
    {
        $a = new RandomNumber;
        $b = new RandomNumber;

        $this->assertEquals($a,$b);
    }
    
}