<?php

namespace Shibanashiqc\PhonePay\Test;
require_once realpath(__DIR__ . "/../vendor/autoload.php");
use PHPUnit\Framework\TestCase as PhpUnitTest;

class TestCase extends PhpUnitTest
{
    public function setUp(): void
    {
        parent::setUp();
    }
    
    public function tearDown(): void
    {
        parent::tearDown();
    }

    
}