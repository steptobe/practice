<?php
//连接数据库
$link = mysql_connect('pma.host', 'root','123456');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//选择database
$db_selected = mysql_select_db('bookmarks');
if (!$db_selected) {
    die('Could not select database: ' . mysql_error());
}
//发送mysql查询
$query = 'SELECT id, email FROM users';
$result = mysql_query($query);
if (!$result) {
    die('Query failed: ' . mysql_error());
}
/* fetch rows in reverse order */
$len = mysql_num_rows($result) - 1;//获得行数
for ( $i = 0;$i <= $len; $i++) {
    if (!mysql_data_seek($result, $i)) {
        echo "Cannot seek to row $i: " . mysql_error() . "\n";
        continue;
    }

    if (!($row = mysql_fetch_assoc($result))) {//取一行作为关联数组
        continue;
    }

    echo $row['id'] . ' ' . $row['email'] . "<br />\n";
}
mysql_free_result($result);//释放结果内存
?>
-------------<br>
<?php
error_reporting(E_ALL);

$link1 = mysql_connect('pma.host', 'root','123456');
$db_list = mysql_query('SHOW DATABASES' ,$link1);//取得服务器里面的database

$i = 0;
$cnt = mysql_num_rows($db_list);
while ($i < $cnt) {
    echo mysql_db_name($db_list, $i) . "<br />\n";//返回结果指针数据库的名字
    $i++;
}
?>
-------------<br>
<?php
    mysql_connect('pma.host', 'root','123456') or
        die("Could not connect: " . mysql_error());
    mysql_select_db("bookmarks");

    $result = mysql_query("SELECT id, email FROM users");

    while ($row = mysql_fetch_array($result, MYSQL_BOTH )) {//从集中行中取得一行作为关联数组
        printf ("ID: %s  Name: %s", $row[0], $row[1]);
        echo "<br />\n";
    }

    mysql_free_result($result);
?>
--------------<br>
<?php
$link = mysql_connect('pma.host','root','123456');
if (!$link) {
    die('Could not connect: ' . mysql_error());
};
mysql_select_db("bookmarks");
$result = mysql_query("SELECT * FROM users");
$i = 0;
while ($i < mysql_num_fields($result)){
	echo "information for column $i:<br />\n";
	$meta = mysql_fetch_object($result);
	if(!$meta){
		echo "no information available <br /> \n";
	}
	echo "<pre>
	$meta->id 
    $meta->email
	</pre>";

	$i++;
}
 mysql_free_result($result);
 ?>
-------------<br>
<?php
/* The users table consists of three fields:
 *   user_id
 *   username
 *   password.
 */
$link = mysql_connect('pma.host','root','123456');
$dbname = "bookmarks";
mysql_select_db("$dbname")
    or die("Could not set $dbname: " . mysql_error());
$res = mysql_query("select * from users");

echo mysql_field_name($res, 0) . "<br>\n";//指定字段的字段名
echo mysql_field_name($res, 2). "<br>\n";
?>
-------------<br>
<?php
    mysql_connect('pma.host','root','123456');
    mysql_select_db("bookmarks");
    $result = mysql_query("SELECT * FROM users");
    $fields = mysql_num_fields($result);//取得结果集中字段的数目
    $rows   = mysql_num_rows($result); //取得结果集中行的数目
    $table = mysql_field_table($result, 0);//取得字段所在的表名
    echo "Your '".$table."' table has ".$fields." fields and ".$rows." record(s)<br>\n";
    echo "The table has the following fields:<br>\n";
    for ($i=0; $i < $fields; $i++) {
        $type  = mysql_field_type($result, $i);//获得指定字段的类型
        $name  = mysql_field_name($result, $i);//获得字段名称
        $len   = mysql_field_len($result, $i);//获得字段的长度
        $flags = mysql_field_flags($result, $i);//关联的标记
        echo $type." ".$name." ".$len." ".$flags."<br>\n";
    }
    printf ("MySQL client info: %s\n", mysql_get_client_info());
    mysql_free_result($result);
    mysql_close();
?>
----------------<br>
</br>
<?php
   mysql_connect('pma.host','root','123456')or
      die("could not set: ".mysql_error());
   mysql_select_db('bookmarks')
      or die("could not set database:" .mysql_error());
   $query = sprintf('SELECT * FROM users
   	');//条件
   $result = mysql_query($query);
   if (!$result) {
   	    $message = 'Invalid query:'.mysql_error()."<br>\n";
   	    die($message);
   }
   echo mysql_field_name($result, 3)."<br>\n";
   mysql_data_seek($result,3);//移动指针
   $row = mysql_fetch_array($result);//取得一行作为关联数组
   	    echo $row['id']."<br>\n";
  
   // while ($row1 = mysql_fetch_object($result)) {
   //   	echo $row1->created ."<br>\n";
   // }
   mysql_free_result($result);
?>
-----------<br>
<?php
$subject = array('1', 'a', '2', 'b', '3', 'A', 'B', '4'); 
$pattern = array('/\d/', '/[a-z]/', '/[1a]/'); 
$replace = array('A:$0', 'B:$0', 'C:$0'); 

echo "preg_filter returns <br>\n";
print_r(preg_filter($pattern, $replace, $subject)); 
echo "<br>";
echo "preg_replace returns <br>\n";
print_r(preg_replace($pattern, $replace, $subject)); 
?>
-----------<br>
</br>
<?php
$subject = "abcdef";
$pattern = '/^def/';
preg_match($pattern, $subject, $matches[1], PREG_OFFSET_CAPTURE, 3);
print_r($matches[1]);
?>