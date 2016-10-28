<?php

use Nckg\Impersonate\Test;

class CanImpersonateTest extends Orchestra\Testbench\TestCase
{
    /** @test */
    public function it_can_set_impersonating_id()
    {
        $user = new Test\User();
        $user->setImpersonating(100);
        $this->assertTrue($user->isImpersonating());
        $this->assertEquals(100, \Session::get('impersonate'));
        $this->assertTrue($user->isImpersonating());
        $user->stopImpersonating();
        $this->assertFalse($user->isImpersonating());
    }
}