<?php 

class Cart
{
	const PRICE_BUTTER = 1.00;
	const PRICE_MILK = 3.00;
	const PRICE_EGGS = 6.95;

	protected $products = array();

	public function add($product, $quantity)

	{
		$this->products[$product] = $quantity;
	}

	public function getQuantity($product)

	{
		return isset($this->products[$product])? $this->products[$product]:flase;
	}

    public function getTotal($tax)
    {
    	$total = 0.00;

    	$callback = 
    	//use 的作用是将上一级作用范围中的变量导入进匿名函数中，使其在匿名函数中可用，但不是参数。
        //利用use子句，就可以让匿名函数追踪来自其父作用域的变量：
    		function ($quantity, $product) use ($tax, &$total)
    		{
    			$pricePerItem = constant(__CLASS__. "::PRICE_".strtoupper($product));
    			$total += ($pricePerItem * $quantity) * ($tax + 1.0);
    		};

    		array_walk($this->products, $callback);
    		//array_walk() 函数对数组中的每个元素应用回调函数。
    		return round($total, 2);
    }

}

$my_cart = new Cart;

$my_cart->add('butter', 1);
$my_cart->add('milk', 3);
$my_cart->add('eggs', 6);

print $my_cart->getTotal(0.05)." ";

?>