<?php
class Foo
{
    function Variable()
    {
        $name = 'Bar';
        $this->$name(); // This calls the Bar() method
    }

    function Bar()
    {
        echo "This is Bar";
    }
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();   // This calls $foo->Variable()

//匿名函数变量赋值示例
$greet = function($name)
{
    printf("Hello %s ", $name);
};

$greet('World');
$greet('PHP');
?>