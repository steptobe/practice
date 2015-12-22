<?php
// page2.php:
  
  // 要正确了解序列化，必须包含下面一个文件
  // include("classa.inc");
  include("page1.php");

  $s = file_get_contents('store');
  $a = unserialize($s);

  // 现在可以使用对象$a里面的函数 show_one()
  $a->show_one();
  ?>
