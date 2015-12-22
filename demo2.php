<?php
$d=cal_days_in_month(CAL_GREGORIAN,10,2005);
echo("There was $d days in October 2005");
?>
<br>-------------</br>
<?php
$d=unixtojd(mktime(0,0,0,1,18,2006));
print_r(cal_from_jd($d,CAL_GREGORIAN));
?>
<br>-------------</br>
<?php
$calinfo=cal_info(0);
print_r($calinfo);
?>
<br>-------------</br>
<?php
$d=cal_to_jd(CAL_GREGORIAN,10,03,2005);
echo($d);
?>
<br>-------------</br>
<?php 
$d=easter_date();
echo($d);
echo(date("M-d-Y",easter_date()) . "</br>");
echo(date("M-d-Y",easter_date(2000)) . "</br>");
echo(date("M-d-Y",easter_date(2001)) . "</br>");
echo(easter_days());
?>
<br>--------------</br>
<?php
$jd=cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
echo(jddayofweek($jd,1));
echo()
?>

