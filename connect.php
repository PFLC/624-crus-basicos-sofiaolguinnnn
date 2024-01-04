<?php
$HOSTNAME = 'localhost';
$USERNAME = 'admin';
$PASSWORD = '';
$DATABASE = 'phpcrud';

$conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>