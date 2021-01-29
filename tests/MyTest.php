<?php

namespace App\Tests;
use PHPUnit\Framework\TestCase;
use App\Controller\MyController;
use App\Entity\User;

class StackTest extends TestCase
{
    public function testPushAndPop()
    {
        $this->assertSame(0, 0);
    }

    public function testNumber()
    {
        $controller = new MyController();
        $this->assertFalse(is_null($controller->number()));
    }

    public function testMyPage()
    {
        $controller = new MyController();
        $this->assertFalse(is_null($controller->mypage()));
    }

    public function testUserLogin()
    {
        $user = new User();
        $user->setLogin("User");
        $this->assertEquals("User", $user->getLogin());
    }

    public function testUserCaption()
    {
        $user = new User();
        $user->setCaption("My motto");
        $this->assertEquals("My motto", $user->getCaption());
    }

    public function testUserNumber()
    {
        $user = new User();
        $user->setLuckynumber(15);
        $this->assertEquals(15, $user->getLuckynumber());
    }
}