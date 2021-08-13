<?php

namespace Deltastateonline1;

use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase {

    public function testGreeting(){

        $message = Omo\DevopsPrototype\HelloWorld\Greetings::sayHelloWorld();
        $this->assertEquals($message , "Hello");
    }


    public function testGreetingAgain(){

        $message = \Omo\DevopsPrototype\HelloWorld\Greetings::sayHelloWorld();
        $this->assertEquals($message , "Hello");
    }

}