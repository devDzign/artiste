<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = (new User())
            ->setEmail('test@email.com')
            ->setPhone("0666666666")
            ->setFirstname('firstname')
            ->setLastname('lastname')
            ->setPassword('password')
            ->setAbout('about')
            ->setInstgram('instgram')
        ;

        $this->assertEquals('test@email.com', $user->getEmail());
        $this->assertEquals('0666666666', $user->getPhone());
        $this->assertEquals('firstname', $user->getFirstname());
        $this->assertEquals('lastname', $user->getLastname());
        $this->assertEquals('password', $user->getPassword());
        $this->assertEquals('about', $user->getAbout());
        $this->assertEquals('instgram', $user->getInstgram());
    }


    public function testIsFalse(): void
    {
        $user = (new User())
            ->setEmail('true@email.com')
            ->setPhone("0666666666")
            ->setFirstname('firstname')
            ->setLastname('lastname')
            ->setPassword('password')
            ->setAbout('about')
            ->setInstgram('instgram')
        ;

        $this->assertNotEquals('test@email.com', $user->getEmail());
        $this->assertNotEquals('0666666666a', $user->getPhone());
        $this->assertNotEquals('firstnamea', $user->getFirstname());
        $this->assertNotEquals('lastnamea', $user->getLastname());
        $this->assertNotEquals('passworda', $user->getPassword());
        $this->assertNotEquals('abouta', $user->getAbout());
        $this->assertNotEquals('instgrama', $user->getInstgram());
    }

}
