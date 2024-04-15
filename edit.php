<?php
// Incluir el archivo de conexión a la base de datos
include 'connect.php';

// Obtener el ID del usuario a editar desde la URL
$id = $_GET['id'];

// Consultar la base de datos para obtener los datos del usuario con el ID proporcionado
$sql = "SELECT * FROM crud WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Asignar los datos del usuario a variables
$id = $row["id"];
$name = $row["name"];
$email = $row["email"];
$mobile = $row["mobile"];
$password = $row["password"];

// Verificar si se ha enviado el formulario de edición
if (isset($_POST['submit'])) {
  // Obtener los nuevos datos del formulario
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  // Actualizar los datos del usuario en la base de datos
  $sql = "UPDATE crud SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
  if (mysqli_query($conn, $sql)) {
    // Mostrar un mensaje de éxito si la actualización fue exitosa
    echo "<script>alert('User updated successfully.')</script>";
    // Redireccionar a la página de visualización de usuarios
    header("location: display.php");
  } else {
    // Mostrar un mensaje de error si la actualización falló
    echo "<script>console.log('Error: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
  }
  // Cerrar la conexión a la base de datos
  mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User | PHP CRUD</title>
  <!-- Incluir el archivo CSS de Tailwind CSS -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container mx-auto mt-12">
    <div class="flex justify-center items-center">
      <!-- Formulario para editar usuario -->
      <form action="edit.php" method="POST" class="w-1/2">
        <div class="flex flex-col mb-4">
          <label for="name" class="mb-2 font-bold text-lg text-gray-900">Name</label>
          <!-- Campo de entrada para el nombre del usuario con el valor predefinido -->
          <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>"
            class="border-2 border-gray-400 p-2 rounded-lg focus:outline-none focus:border-green-500" required>
        </div>
        <!-- Resto de campos de entrada para el correo electrónico, número de móvil y contraseña -->
        <!-- ... -->
        <div class="flex flex-col mb-4">
          <button type="submit" name="submit"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Submit</button>
        </div>
      </form>
    </div>
</body>

</html>
