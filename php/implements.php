<?php 
//使用接口（interface），你可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
//接口中定义的所有方法都必须是public，这是接口的特性。
//声明一个'iTemplate'接口。
interface iTemplate
{
	public function setVariable($name, $var);
	public function getHtml();
}

class Template implements iTemplate
{
	private $vars = array();
	// $var = {"1"=>"hh", "2"=>"jj"};

	public function setVariable($name, $var)
	{
		$this->vars[$name] = $var;
	}

	public function getHtml()
	{
		 foreach($this->vars as $name => $value) {
            print_r($value);
        }
 
      
        echo "<br>";
        print_r($name);//"2"
    }
}

$foo = new Template();
$foo->setVariable("{2,3,4}", "{'jj','kk','ii'}");

$foo->getHtml();