<?php
$host = "localhost";
$pword = "June021996";
$dbname = "id10219974_wwwefiewura";
$uname = "id10219974_root";

// Create connection
$con = new mysqli( $host , $uname , $pword , $dbname );

// Check connection
if ($con->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
?>
