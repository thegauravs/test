<?php 

abstract class class1
{
	abstract function test();

}


class class2 extends class1
{
	function test()
	{
		echo "Hello";
	}
}

$obj = new class2();
$obj->test();