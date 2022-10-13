<?php
/*Abstract class*/
// abstract class class1{
// 	abstract function fun1();
// }

// class class2 extends class1{
// 	function fun1(){
// 		echo "fun1";
// 	}
// }



class class3 extends class1{
	function fun1(){
		echo "fun2";
	}
}


$obj = new class3();
$obj->fun1();

/*interface*/
interface class1{
	public function fun1();
}

class class2 implements class1{
	function fun1(){
		echo "fun1";
	}
}



class class3 implements class1{
	function fun1(){
		echo "fun2";
	}
}


$obj = new class3();
$obj->fun1();
