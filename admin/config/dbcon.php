<?php
/**
 * Description of dbcon
 *
 * @author Alberto
 */

$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "allsites";
$port = "3306";

/*
!$mysqli = mysqli_connect($host, $username, $password, $database, $port);

if ($mysqli-> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  header("Location: ../../errors/dberror.php");
  exit();
}

$mysqli = mysqli_connect($host, $username, $password, $database, $port);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
*/

$mysqli = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

