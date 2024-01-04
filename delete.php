<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM crud WHERE id=$id";
if (mysqli_query($conn, $sql)) {
  echo "<script>alert('User deleted successfully.')</script>";
  header("location: display.php");
} else {
  echo "<script>console.log('Error: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
}
?>