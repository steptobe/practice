<?php
header("Content-type: text/html; charset=utf-8");
if (function_exists('mysql_connect')) {
    echo 'Mysql扩展已经安装<br>';
}
$link = mysql_connect("pma.host", "root","123456");
if(!$link){
	die('could not connect: ' .mysql_error().'<br>');
}
if (mysql_query("create database learn",$link))
  {
  echo "Database created <br>";
  }
else
  {
  echo "Error creating database: " . mysql_error()."<br>";
  }

 mysql_select_db("learn", $link);
?>