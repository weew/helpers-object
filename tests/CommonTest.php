<?php

namespace tests;

use DateTime;
use PHPUnit_Framework_TestCase;

class CommonTest extends PHPUnit_Framework_TestCase {
    function test_it_clones_an_object() {
        $date = new DateTime();
        $anotherDate = safe_clone($date);
        $this->assertTrue($date == $anotherDate);
        $this->assertFalse($date === $anotherDate);
    }

    function test_it_does_not_throw_an_error_during_a_clone_of_primitive_data() {
        $value = 1;
        $anotherValue = safe_clone($value);
        $this->assertTrue($value === $anotherValue);
    }
}
