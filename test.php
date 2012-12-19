<?php

require_once "fib.php";

class FibTest extends PHPUnit_Framework_TestCase
{
    public function testFirstFibs() {

        $expected = array(1,1,2,3,5,8);

        for ($i = 0; $i < count($expected); $i++) {
            $this->assertEquals(fibonacci($i), $expected[$i]);
        }
    }

    public function testLargeFib() {
        $expected = 9227465;
        $start = time();
        $result   = fibonacci(34);
        $end = time();
        $delta = $end-$start;
        $this->assertEquals($result, $expected);
        $this->assertLessThan(1, $delta, "Expected computation to take less than 1 second, it took $delta seconds");
    }
}
?>
