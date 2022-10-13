<?php
// Declare a simple class
class TestClass
{
    public $foo;
    public $foo2;

    public function __construct($foo, $foo2)
    {
        $this->foo = $foo;
        $this->foo2 = $foo2;
    }

    public function __toString()
    {
        return $this->foo[1];
    }
}
// sadnshdbs
$class = new TestClass(["Hello", "World"], "World");
// $h = new TestClass;
echo $class;
?>