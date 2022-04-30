<?php
declare(strict_types=1);

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use User\NewProject\RulesPassword;

class RulesPasswordTest extends TestCase {
    
    public function testSlabyPass()
    {   $expected = new RulesPassword;
        $mess = $expected->generate(8, false, true, false);
        $this->assertEquals($mess, RulesPassword::SLABY_STORNG_PASSWORD);  
    }

    public function testSlabyPass_Length()
    {   $expected = new RulesPassword;
        $mess = $expected->generate(7, true, true, true);
        $this->assertEquals($mess, RulesPassword::SLABY_STORNG_PASSWORD);  
    }

    public function testStrongPass()
    {   $expected = new RulesPassword;
        $mess = $expected->generate(8, true, true, true);
        $this->assertEquals($mess, RulesPassword::STRONG_PASSWORD);  
    }
    
    public function testMiddlePass()
    {   $expected = new RulesPassword;
        $mess = $expected->generate(8, false, true, true);
        $this->assertEquals($mess, RulesPassword::MIDDLE_STRONG_PASSWORD);  
    }
}