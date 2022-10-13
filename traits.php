<?php 

trait class1
{
	var $a = "sdasd";
	function fun1(){
		echo "fun1";
	}
}

trait class2 
{
	var $b = "sdasdasffas";
	use class1;
	function fun2(){
		echo "fun2";
	}
}


class class3{
	use class2;
	var $s = 0;
	function fun3(){
		echo "fun3";
	}
}
class class4 extends class3 {
	var $t = "adubadh";
	function fun4(){
		echo "fun4";
	}
}


$obj = new class4();
// $obj->fun1();
var_dump($obj);

/*trait t1{
	function fun1(){
		echo "t1:fun1";
	}
}

trait t2{
	function fun1()
	{
		echo "t2:fun2";
	}
}
class class1{
	use t1,t2{
		t1::fun1 insteadof t2;
		t2::fun1 as fun2;
	}
	// use t1, t2;
	// function fun1(){
	// 	echo "class:fun2";
	// }
}

$obj = new class1();
$obj->fun2();*/