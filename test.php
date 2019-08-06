<?php
$orderID = isset($_GET['id'])? $_GET['id']:"0540757034000";
  echo '{"payment":'.file_get_contents("http://client.teamcyst.com/checktransaction.php?orderID=".$orderID);
  echo ',"order":{"status":"'.$orderID.'"}}';
?>