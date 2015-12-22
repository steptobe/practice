<?php 
/*
class SimpleClass
{
	public $var = 'a default value';

	public function displayVar(){
		echo $this->var;
	}
}

$a = new SimpleClass();
$a->displayVar();

class A
{
	public function foo()
	{
		if(isset($this)){
			echo '$this is defined (';
			echo get_class($this);
			echo ")\n";
		} else {
			echo "\$this is not defined.\n";
		}
	}
}

class B
{
	public function bar()
	{
		A::foo();
	}
}

$a = new A();
$a->foo();
// A::foo();//直接调用函数foo(),不用实例化类

$b = new B();
$b->bar();

// B::bar();

//访问控制（可见性）

class MyClass
{
	public $public = 'public';
	protected $protected = 'protected';
	private $private = 'Private';

	function printHello()
	{
		echo $this->public;
		echo "<br>";
		echo $this->protected;
		echo "<br>";
		echo $this->private;
	}
}

$obj = new MyClass();
echo $obj->public;
echo "<br>";
// echo $obj->protected;//发生致命错误
// echo $obj->private;
$obj->printHello();

class MyClass2 extends MyClass
{
	// protected $protected = 'protected2';

	function printHello()
	{
		echo "<br>";
		echo $this->public;
		echo "<br>";
		echo $this->protected;
		echo "<br>";
		echo $this->private;//私有不能继承
	}
}

$obj2 = new MyClass2();
echo "<br>";
echo $obj2->public;
$obj2->printHello();//私有不等继承
*/
class MyClass
{
    // 声明一个公有的构造函数
    public function __construct() { }

    // 声明一个公有的方法
    public function MyPublic() { }

    // 声明一个受保护的方法
    protected function MyProtected() { 
    	echo "ok";
    }

    // 声明一个私有的方法
    private function MyPrivate() { }

    // 此方法为公有
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass;
$myclass->MyPublic(); // 这行能被正常执行
// $myclass->MyProtected(); // 这行会产生一个致命错误
// $myclass->MyPrivate(); // 这行会产生一个致命错误
$myclass->Foo(); // 公有，受保护，私有都可以执行

class foo {
    // 自 PHP 5.3.0 起
    const bar = <<<'EOT'
bar
EOT;
}

?>