<?php
//具有构造函数的类会在每次创建新对象时先调用此方法，所以非常适合在使用对象之前做一些初始化工作。
class BaseClass {
   function __construct() {
   	  $this->name = "MyDestructableClass";
      print "In BaseClass constructor\n";
   }

//析构函数会在到某个对象的所有引用都被删除或者当对象被显式销毁时执行。
   function __destruct() {
   	  echo "<br>";
       print "Destroying " . $this->name . "\n";
   }
}

class SubClass extends BaseClass {
   function __construct() {
       parent::__construct();
       print "----In SubClass constructor\n";
   }
}

class OtherSubClass extends BaseClass {
	
}

// In BaseClass constructor
$obj = new BaseClass();
echo "<br>";
// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();
echo "<br>";
// In BaseClass constructor
$obj = new OtherSubClass();



?>