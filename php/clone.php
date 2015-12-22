<?php
class SubObject
{
    //对象复制可以通过clone关键字来完成（如果对象中存在__clone()方法，会先被调用）
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
      
        // 强制复制一份this->object， 否则仍然指向同一个对象
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;


print("Original Object: ");
echo "<br>";
print_r($obj);
echo "<br>";
print("Cloned Object: ");
echo "<br>";
print_r($obj2);

?>