<?php 

class Base
{
	public function sayHello(){
		echo "hello ";
	}
}

trait SayWorld 
{
	public function sayHello(){
		parent::sayHello();
		echo 'world !';
	}
}

class MyHelloWorld extends Base
{
	use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
define("FOO", "value");
echo FOO;//输出 value
echo __FILE__;// /www/practice/html/php/traits.php
echo __DIR__;// /www/practice/html/php
?>
