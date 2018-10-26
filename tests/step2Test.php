<?php

// Include our index page
require_once __DIR__.'/../steps/step2.php';

use PHPUnit\Framework\TestCase;

final class Step2Test extends TestCase
{
    public function testChangedValue() : void
    {
        global $array;
        
        $value = strtolower($array[1]);
        $this->assertEquals($value, 'test4', 'The second value in the array should be "test4"');
    }

    public function testAddNewValue() : void
    {
        global $array;

        // Pop off the last value and check it
        $value = strtolower(array_pop($array));
        $this->assertEquals('pineapple', $value, 'The last value in the array should equal "pineapple"');
    }
}
