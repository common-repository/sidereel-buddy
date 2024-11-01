<?php

$x = str_replace('?d=',"?v=",$x);
$x = str_replace('http://www.megavideo.com/?v=',"",$x);
$x = str_replace('http://megavideo.com/?v=',"",$x);

$y = new xml();
$vid = $x;

$source = file_get_contents("http://megavideopop.com/slurp.php?vid=$vid");
if (!$y->fetch($source)) { 
  echo "<h2>There was a problem parsing your XML</h2>";
  echo $y->log;
}

$error = "1";

foreach ($y->data->ROWS[0]->ROW as $row) {

if(!($row->_attr->ERROR==$error))

print "MegaVideo.com <a href='http://wwwstatic.megavideo.com/mv_player.swf?v=$vid' target='_blank'>LINK</a></br>";

else
echo "";
}

?>