<?php
/**
 * Created by PhpStorm.
 * User: jozef.chladek
 * Date: 2019-04-04
 * Time: 19:29
 */



class TestReplacer extends PHPUnit\Framework\TestCase
{
    public function testControllIfNumbersAreReplaced()
    {
        $test = new \Chatter\MVC\controller\ReplacerController();
        $this->assertEquals('L', $test->replace(50));
    }
}