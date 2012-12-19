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
}
?>
