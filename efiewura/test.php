<?php
$orderID = file_get_contents("http://client.teamcyst.com/checktransaction.php?orderID=".(isset($_GET['id'])? $_GET['id']:"error"));
  echo '{"payment":'.$orderID.',"order":{"status":"'.((isset($_GET['id'])/*&&isset(json_decode($orderID)->id)*/)? $_GET['id']:"0").'"}}';
?>