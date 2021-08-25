<?php

use App\Controllers\Controller;
use PHPUnit\Framework\TestCase;

/*
 * Windows:
 * php vendor/phpunit/phpunit/phpunit test/TestController.php
 *
 * Linux:
 * vendor/bin/phpunit tests/
 * */

class TestController extends TestCase
{
    public function test_method_trasnform_tu_upper_first_letter()
    {
        $testController = new Controller();
        $this->assertSame('Cool!', $testController->toUppercaseFirst('cool!'));
        $this->assertSame('Full!', $testController->toUppercaseFirst('full!'));
    }
}