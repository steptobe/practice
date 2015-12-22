<?php
   function myfunction($v){
   	if($v==="horse")
   	{
   		return true;
   	}
   	return false;
   }
   $a=array(0=>"dog",1=>"cat",2=>"horse");
   print_r(array_flip($a));
   echo "<br>\n";
   print_r(array_filter($a,"myfunction"));
   ?>
   <br>111111111111</br>
   <?php 
     $a=array(0=>"a",1=>"b",2=>"c");
     $b=array(0=>"a",1=>"c",2=>"d");
     print_r(array_intersect($a, $b));
     echo "<br>\n";
     print_r(array_intersect_assoc($a,$b));
     echo "<br>\n";
     print_r(array_key_exists(1, $a));
     print_r(array_keys($b));//返回键名  
   ?>
   <br>222222222</br>
  <?php 
     function myFunction1($v1,$v2)
     {
      if($v1===$v2)
	      {
	      	return 0;
	      }
      else if($v1>$v2)
	      {
	      	return 1;
	      }
      else 
	      {	
	      	return -1;
	      }
     }
     $a1=array(0=>"a",2=>"b",3=>"c");
     $a2=array(0=>"a",2=>"c",3=>"d");
     print_r(array_intersect_uassoc($a1,$a2,"myFunction1"));
     echo "<br>\n";
     array_multisort($a1,SORT_DESC,$a2);
     print_r($a1);
     echo "<br>\n";
     print_r(array_merge_recursive($a1,$a2));
   ?> 
   <br>33--------</br>
<?php 
  function myfunction2($vi,$v2)
  {
  	if($vi===$v2)
  	{
  		return "same";
  	}
  	else
  	{
  		return "different";
  	}
  }
  	$a1=array("a","b","c");
  	$a2=array("a","c","d");
  	print_r(array_merge($a1,$a2));
  	echo "<br>\n";
  	print_r(array_map("myfunction2",$a1,$a2));
  	echo "<br>\n";
  	print_r(array_combine($a1,$a2));
  	echo "<br>\n";
  	print_r(array_pad($a1, 4,"hhh"));
  	echo "<br>";
  	print_r(array_pop($a1));
  	echo "<br>";
  	print_r(array_product($a1));
  	echo "<br>";
  	
 ?>
 <br>44--------------</br>
<?php 
	$a1=array(0=>"a",2=>"b",3=>"c");
    $a2=array(0=>"a",2=>"c",3=>"d");
  	print_r(array_rand($a1,2));//返回键名
  	echo "<br>";
  	print_r(array_reverse($a1));
  	echo "<br>";
  	array_push($a1, 4,"haha");//这个数组返回的是长度
  	print_r($a1);//新数组
  	echo "<br>";
  	$s=array_slice($a1, 3);
  	print_r($s);
?>
<br>55-------------</br>
<?php 
  function myfunction3($v1,$v2){
  	return $v1 . "-". $v2;
  }
  $a=array("dog","cat","horse");
  $a1=array("dog","cat");
  print_r(array_reduce($a, "myfunction3",1));
  echo "<br>";
  print_r(array_search("dog",$a));
  echo "<br>";
  print_r(array_splice($a,1,1,$a1));
  echo "<br>";
  print_r(array_unique($a));
  echo "<br>";
  print_r(array_values($a));
?>
<br>-------------------</br>
<?php
$a1=array("Dog","Dog","Cat");
$a2=array("Pluto","Fido","Missy");
array_multisort($a1,$a2);
print_r($a1);
print_r($a2);
?>
<br>------------------</br>
<?php
$firstname = "Peter";
$lastname = "Griffin";
$age = "38";

$name = array("firstname", "lastname");
$result = compact($name,"age");

print_r($result);
?>
<br>------------</br>
<?php
$people = array(1=>"Peter", "Joe", "Glenn", "Cleveland");

print_r (each($people));

reset($people);

while (list($key, $val) = each($people))
  {
  echo "$key => $val<br />";
  }
?>
<br>---------------</br>
<?php
$temp_files = array("temp15.txt","Temp10.txt",
"temp1.txt","Temp22.txt","temp2.txt");//有大小写

sort($temp_files);
echo "Natural order: ";
print_r($temp_files);
echo "<br />";

natcasesort($temp_files);
echo "Natural order case insensitve: ";
print_r($temp_files);
?>
<br>----------------</br>
<?php
$temp_files = array("temp15.txt","temp10.txt",
"temp1.txt","temp22.txt","temp2.txt");

sort($temp_files);
echo "Standard sorting: ";
print_r($temp_files);
echo "<br />";

natsort($temp_files);
echo "Natural order: ";
print_r($temp_files);
?>
<br>---------------</br>
<?php
$temp_files = array("temp15.txt","temp10.txt",
"temp1.txt","temp22.txt","temp2.txt");

natsort($temp_files);
echo "Natural order: ";
print_r($temp_files);
echo "<br />";

// natcasesort($temp_files);
// echo "Natural order case insensitve: ";
// print_r($temp_files);
?>


