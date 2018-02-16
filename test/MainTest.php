<?php
declare(strict_types=1);

namespace Test;

use Main;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testMainHelloWorld()
    {
        $result = Main::helloWorld();
        $this->assertEquals('Hello world!', $result);
    }
}
