<?php 
  function connect_sql($db){
    $link = mysql_connect("pma.host", "root","123456");
    if(!$link){
      die('could not connect: ' .mysql_error().'<br>');
    }
     mysql_select_db($db, $link);
  }

  function show($table){
     $result = mysql_query("select * from {$table}");
     while ($row = mysql_fetch_array($result))
     {
      echo '<tr>';
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td width="30%">'.$row['content'].'</td>';
        echo '<td>'.$row['ip'].'</td>';
        echo '<td>'.$row['created'].'</td>';
       echo '</tr>';
     }
  }
?>