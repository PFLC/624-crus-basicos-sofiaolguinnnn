<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display | PHP CRUD</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body>
  <!-- La siguiente parte del código muestra un botón para agregar usuarios -->
  <div class="container mx-auto mt-12">
    <div class="flex justify-center items-center my-8">
      <a href="user.php" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add User</a>
    </div>
    <!-- Aquí comienza la tabla que muestra los usuarios -->
    <div class="flex justify-center items-center">
      <table class="table-auto">
        <thead>
          <tr>
            <!-- Los encabezados de la tabla -->
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Mobile</th>
            <th class="px-4 py-2">Password</th>
            <th class="px-4 py-2">Edit</th>
            <th class="px-4 py-2">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Se incluye el archivo de conexión a la base de datos
          include 'connect.php';
          // Selecciona todos los registros de la tabla 'crud'
          $sql = "SELECT * FROM crud";
          $result = mysqli_query($conn, $sql);
          // Si hay registros en la base de datos, se muestran en la tabla
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              // Muestra los datos de cada usuario en celdas de la tabla
              echo "<td class='border px-4 py-2'>" . $row['id'] . "</td>";
              echo "<td class='border px-4 py-2'>" . $row['name'] . "</td>";
              echo "<td class='border px-4 py-2'>" . $row['email'] . "</td>";
              echo "<td class='border px-4 py-2'>" . $row['mobile'] . "</td>";
              echo "<td class='border px-4 py-2'>" . $row['password'] . "</td>";
              // Enlaces para editar y eliminar usuarios
              echo "<td class='border px-4 py-2'><a href='edit.php?id=" . $row['id'] . "' class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>Edit</a></td>";
              echo "<td class='border px-4 py-2'><a href='delete.php?id=" . $row['id'] . "' class='bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded'>Delete</a></td>";
              echo "</tr>";
            }
          } else {
            // Si no hay resultados, muestra un mensaje de alerta
            echo "<script>alert('0 Results')</script>";
          }
          // Se cierra la conexión a la base de datos
          mysqli_close($conn);
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
