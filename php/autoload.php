<?php

function __autoload($class_name) {
    require_once $class_name . '.php';
}

$obj  = new MyClass();//输出


//测试
function __autoload($name) {
    echo "Want to load $name.\n";
    throw new Exception("Unable to load $name.");
}

try {
    $obj = new NonLoadableClass();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
?>

