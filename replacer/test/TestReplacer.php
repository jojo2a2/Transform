<?php
/**
 * Created by PhpStorm.
 * User: jozef.chladek
 * Date: 2019-04-05
 * Time: 12:13
 */

use Replacer\ReplacerController;

class TestReplacer extends PHPUnit\Framework\TestCase
{
    public function testIfNumbersAreReplaced(): void
    {
        $test = new \Replacer\ReplacerController();
        $this->assertEquals('L', $test->replace(50));
    }

    public function testIfInputIsNumeric(): void
    {
        $test = new \Replacer\ReplacerController();
        $this->assertIsNumeric('int', 'Is not Numeric');
    }

    public function testIfInputIsEmpty(): void
    {
        $num = null;
        $test = new \Replacer\ReplacerController();
        $this->assertEmpty($num);
    }
}
