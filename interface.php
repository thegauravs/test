<?php
interface class1
{
	public function test();
}

interface class2
{
	public function test2();
}

class class3 implements class1, class2
{
	public function test()
	{
		echo "test";
	}
	public function test2()
	{
		echo "test2";
	}
}

$obj = new class3();
$obj->test();
$obj->test2();