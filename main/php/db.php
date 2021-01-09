<?php 

define('HOST','localhost');
define('USER','root');
define('DB','mars');

$connection = new mysqli(HOST,USER,'',DB) or die("ERROR ! DB CONFIGURATION ERROR");

?>