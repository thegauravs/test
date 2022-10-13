<?php

class class1
{
	public static $num = 10;
	public static $num2=20;
	function __construct()
	{
		echo "hello";
	}
	public static function fun1()
	{
		echo self::$num2;
		echo "test";
	}
}

// $obj = new class1();
echo class1::$num;
echo class1::fun1();