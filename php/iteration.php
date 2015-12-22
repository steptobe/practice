<?php
class MyIterator implements Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }

//重置移动的位置，return void
    public function rewind() {
        echo "rewinding <br>";
        reset($this->var);
    }

//获得当前遍历到的属性值的方法， return mixed
    public function current() {
        $var = current($this->var);
        echo "current: $var <br>";
        return $var;
    }

//获得当前遍历到的属性名的方法， return scalar
    public function key() {
        $var = key($this->var);
        echo "key: $var <br>";
        return $var;
    }

//向下移动需要遍历的位置 return void
    public function next() {
        $var = next($this->var);
        echo "next: $var <br>";
        return $var;
    }

//验证当前位置是否有效的方法，return bool
    public function valid() {
        $var = $this->current() !== false;
        echo "valid: {$var} <br>";
        return $var;
    }
}


$values = array(1,2,3);
$it = new MyIterator($values);

foreach ($it as $a => $b) {
    print "$a: $b ";
}
?>