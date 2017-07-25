<?php
class DependsTest extends PHPUnit_Framework_TestCase
{
    public function testEmpty()
    {
        $stack = array();
        $this->assertEmpty($stack,0);
 
        return $stack;
    }
    
}
?>
