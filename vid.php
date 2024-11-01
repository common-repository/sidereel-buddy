<?php
require_once(dirname(__FILE__).'/class_xml.php');

$y = new xml();
$vid = $_GET['vid'];

$source = file_get_contents("http://megavideopop.com/slurp.php?vid=$vid");
if (!$y->fetch($source)) { 
  echo "<h2>There was a problem parsing your XML</h2>";
  echo $y->log;
}

$error = "1";

foreach ($y->data->ROWS[0]->ROW as $row) {

if(!($row->_attr->ERROR==$error))
echo "$vid";

else




echo "";
}
?>