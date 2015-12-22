<?php 

/*继承一个抽象类的时候，子类必须实现抽象类中的所有抽象方法；
另外，这些方法的可见性 必须和抽象类中一样（或者更为宽松）。
*/
abstract class AbstractClass
{
	abstract protected function getValue();
	abstract protected function prefixValue($prefix);

	public function printOut(){
		print $this->getValue() ."\n";
	}
}

class ConcreteClass1 extends AbstractClass
{
	protected function getValue(){
		return "ConcreteClass1";
	}

	public function prefixValue($prefix){
		return "{$prefix}ConcreteClass1";
	}
}

class ConcreteClass2 extends AbstractClass
{
	public function getValue(){
		return "ConcreteClass2";
	}

	public function prefixValue($prefix){
		return "{$prefix}ConcreteClass2";
	}
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('foo_')."\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('foo_')."\n";
?>