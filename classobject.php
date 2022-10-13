<?php 
Class Car
{
	function Car()
	{
		echo "start";
		// $this->x=$y;
	}

	function fun1()
	{
		echo "Hello";//$this->x;
	}


	// function __destruct()
	// {
	// 	echo "end";
	// }
}

Class Maruti extends Car
{
	function Maruti()
	{
		// parent::__construct();
		echo "start Maruti ";
		// $this->x=$y;
	}

	function fun1()
	{
		echo "Hello child";//$this->x;
	}
}




$obj1 = new Maruti();
$obj1->fun1();