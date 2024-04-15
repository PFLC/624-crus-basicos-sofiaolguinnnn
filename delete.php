<?php
// Incluimos el archivo de conexión
include 'connect.php';

// Recuperamos el ID del usuario a eliminar desde la URL
$id = $_GET['id'];

// Preparamos la consulta SQL para eliminar el usuario con el ID proporcionado
$sql = "DELETE FROM crud WHERE id=$id";

// Ejecutamos la consulta y verificamos si se realizó correctamente
if (mysqli_query($conn, $sql)) {
  // Si se ejecuta correctamente, mostramos un mensaje de éxito y redirigimos a la página de visualización
  echo "<script>alert('Usuario eliminado exitosamente.')</script>";
  header("location: display.php");
} else {
  // En caso de error, mostramos un mensaje de error en la consola del navegador
  echo "<script>console.log('Error: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
}
?>
