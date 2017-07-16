<?php

class TestSuite extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_calculate_reading_time_in_minutes()
    {
        $readTime = new ReadTime\Calculate($this->_getHtmlText());
        $this->assertEquals(0.345, $readTime->inMinutes());
    }

    /** @test */
    public function it_can_calculate_reading_time_in_seconds()
    {
        $readTime = new ReadTime\Calculate($this->_getHtmlText());
        $this->assertEquals(20, $readTime->inSeconds());
    }

    protected function _getHtmlText()
    {
        return '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
<div> consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>';
    }
}