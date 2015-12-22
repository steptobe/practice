<?php 

class foo
{
	public function printItem($string)
	{
		echo 'foo: ' .$string .PHP_EOL;
	}

	public function printPHP()
	{
		echo 'PHP is great.' .PHP_EOL;
	}
}

class bar extends foo 
{
	public function printItem($string)
	{
		echo 'bar ' .$string .PHP_EOL;
	}
}

$foo = new foo();
$bar = new bar();
$foo->printItem('baz');
echo "<br>";
$foo->printPHP();
echo "<br>";
$bar->printItem('baz');
echo "<br>";
$bar->printPHP();
?>