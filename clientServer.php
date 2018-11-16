<?php
header("Access-Control-Allow-Origin: *");
$site= 'https://vchrombie.github.io/';
$html = file_get_contents($site);
//echo $html;
$bytes=file_put_contents('/home/vchrombie/cap-america/markup.txt', $html); #you may have to provide the correct address#
$a=exec('/usr/bin/python /home/vchrombie/cap-america/test.py '.$site.' 2>&1 '); #you may have to provide the correct address#
echo $a;
?>
