<?php

namespace App\Tests;
use PHPUnit\Framework\TestCase;
use App\Controller\MyController;

class StackTest extends TestCase
{
    public function testPushAndPop()
    {
        $this->assertSame(0, 0);
    }

    public function testNumber()
    {
        $controller = new MyController();
        $this->assertTrue(is_int($controller->number()));
    }

    public function testMyPage()
    {
        $controller = new MyController();
        $this->assertTrue(is_string($controller->mypage()));
    }
}