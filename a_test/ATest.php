<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use A\AClass;

final class ATest extends TestCase
{
    public function testPushAndPop(): void
    {
        $aClass = new AClass();
        $this->assertSame(1, $aClass->a_1());
    }
}