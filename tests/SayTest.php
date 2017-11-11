<?php

use Sunshinexcode\Hello\Say;
use PHPUnit\Framework\TestCase;

class SayTest extends TestCase {
    public function testHello() {
        $this->assertEquals('Hello Composer!', Say::hello());
    }
}