<?php
declare(strict_types=1);

namespace Test\Unit;

use Exception;
use PasswordGenerator as GlobalPasswordGenerator;
use PHPUnit\Framework\TestCase;
use User\NewProject\PasswordGenerator;

class PasswordGeneratorTest extends TestCase {
    
    public function testExceptionLengthPass()
    {
        $passGener = new PasswordGenerator();
        $this->expectException(\Exception::class);$passGener->generate(129);
    }

    public function testExceptionMessagePass()
    {
        $passGener = new PasswordGenerator();
        $this->expectExceptionMessage('Неверная длина пароля');
        $passGener->generate(129); 
    }

    public function testMaxLengthPass()
    {
        $passGener = new PasswordGenerator();
        $password = $passGener->generate(123);
        $passLength = strlen($password);
        $this->assertLessThanOrEqual(128, $passLength);
    }
}