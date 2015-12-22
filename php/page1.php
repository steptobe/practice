<?php 
include("classa.inc");
  
  $a = new A;
  $s = serialize($a);
  // 把变量$s保存起来以便文件page2.php能够读到
  echo $s."<br>";

  file_put_contents('store', $s);
?>