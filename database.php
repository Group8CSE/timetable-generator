<?php
$connection = new mysqli("localhost","root","","timetable");

// Check connection
if ($connection -> connect_errno) {
  echo "Failed to connect to MySQL: " . $connection -> connect_error;
  exit();
}
?>
