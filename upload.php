<?php
	// function download_remote_file($file_url, $save_to)
	// {
	// 	$content = file_get_contents($file_url);
	// 	file_put_contents($save_to, $content);
	// }

	// download_remote_file('https://www.countries-ofthe-world.com/flags/flag-of-Afghanistan.png', realpath("./downloads") . '/file.png');
$as = array('scores' => array('shuxue' => '90','xue' => '98'),
	'score' => array('shuxue' => '90','xue' => '98'),);
foreach ($as  as $a => $b ) { 
	          // print_r($a->scores);
	          // print_r($a->score);
	          echo $a.':';
	          print_r($b['shuxue']);
	          echo ',';
	          print_r($b['xue']);
              echo "<br>";
            }

?>