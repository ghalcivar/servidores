<?
 
class FirstTest extends _Framework_TestCase
{
    public func testPushAndPop()
    {
        $stack = array();
        $this->assertEquals(1, count($stack));
     ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));
 
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}
