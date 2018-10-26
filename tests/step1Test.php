<?php

// Include our index page
require_once __DIR__.'/../steps/step1.php';

use PHPUnit\Framework\TestCase;

final class Step1Test extends TestCase
{
    public function testArrayLength() : void
    {
        global $array;
        $this->assertTrue(count($array) >= 2, 'Array must contain at least 2 elements');
    }
}
