<?php 

class Foo
{
	//静态成员，可以不用实例化类而直接访问。
	public static $my_static = 'foo';

	public function staticValue(){
		return self::$my_static;
	}
}

print Foo::$my_static;//输出'foo';
$foo = new Foo();
print $foo->staticValue() . " ";//‘foo’

//静态方法
class Bar
{
	public static function aStaticMethod(){
		echo "outo";
	}
}

Bar::aStaticMethod();//输出'outo'
?>

