<?php
class Example
{
    // 保存类实例在此属性中
    private static $instance;
    
       // 构造方法声明为private，防止直接创建对象
    private function __construct() 
    {
        echo 'I am constructed';
    }

    // singleton 方法
    public static function singleton() 
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }
    
    // Example类中的普通方法
    public function bark()
    {
        echo 'Woof!';
    }

    // 阻止用户复制对象实例
    public function __clone()
    {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

}

?>
<?php

// 这个写法会出错，因为构造方法被声明为private
// $test = new Example;

// 下面将得到Example类的单例对象
$test = Example::singleton();
$test->bark();

// 复制对象将导致一个E_USER_ERROR.
// $test_clone = clone $test;

?> 