
# Aplicación CRUD de PHP

Descripción del Proyecto: Este proyecto consiste en una aplicación web desarrollada con PHP que ofrece funcionalidades de CRUD (Crear, Leer, Actualizar y Eliminar) datos. Su enfoque principal es la gestión de información de usuarios.

## Tecnologías Utilizadas

- **PHP:** Es el lenguaje de programación principal utilizado para desarrollar la lógica del lado del servidor. PHP permite crear páginas web dinámicas y manejar la interacción con la base de datos.
- **MySQL:** Es un sistema de gestión de bases de datos relacional que se utiliza para almacenar y organizar los datos de los usuarios. MySQL permite realizar operaciones CRUD de manera eficiente.
- **HTML & CSS:** Se utilizan para diseñar la interfaz de usuario y dar formato a las páginas web. HTML se encarga de la estructura del contenido, mientras que CSS se utiliza para aplicar estilos y mejorar la apariencia visual.
- **Tailwind CSS:** Es un framework de CSS que proporciona un conjunto de clases predefinidas para facilitar el diseño y la maquetación de interfaces de usuario. Tailwind CSS permite crear interfaces modernas y atractivas de manera rápida y eficiente.
- 
## Páginas y Funcionalidades

### 1. Página de Inicio (`display.php`)

![Página de Inicio](images/display.png)

- Muestra una tabla con todos los usuarios almacenados en la base de datos.
- Proporciona enlaces para agregar, editar o eliminar usuarios.
- Permite realizar todas las operaciones CRUD desde una sola interfaz.
- 
### 2. Agregar Usuario (`user.php`)

![Agregar Usuario](images/add.png)

- Permite ingresar los datos de un nuevo usuario, como nombre, correo electrónico y contraseña.
- Añade el usuario a la base de datos una vez que se completan los datos.

### 3. Editar Usuario (`edit.php`)

![Editar Usuario](images/edit.png)

- Muestra un formulario prellenado con la información actual del usuario.
- Permite modificar los detalles del usuario, como nombre, correo electrónico y contraseña.
- Guarda los cambios actualizados en la base de datos.

### 4. Eliminar Usuario (`delete.php`)

- Facilita la eliminación de un usuario de la base de datos.
- Al hacer clic en el enlace de eliminar en la página de inicio, se elimina el usuario correspondiente de la base de datos.

## Conexión a la Base de Datos (`connect.php`)

El archivo connect.php se encarga de establecer la conexión con la base de datos MySQL utilizando las credenciales proporcionadas. Esta conexión es necesaria para realizar operaciones de lectura y escritura en la base de datos.

## Cómo Ejecutar

Instrucciones para la Ejecución: Para ejecutar la aplicación en un entorno local, se deben seguir los siguientes pasos: 
1- Clonar el repositorio en la máquina local.
2- Configurar un entorno PHP y MySQL (como XAMPP).
3- Crear la base de datos utilizando phpMyAdmin.
4- Ejecutar la aplicación en un servidor local.

## Nota de Seguridad

Consideraciones de Seguridad: Se advierte que la aplicación es básica y se recomienda implementar medidas adicionales de seguridad, como el uso de declaraciones preparadas u ORMs, para evitar ataques de inyección SQL. Estas medidas ayudarán a proteger la integridad de los datos y prevenir posibles vulnerabilidades de seguridad.

## Tips para Usar CRUD de Forma Efectiva

1. Planifica la Estructura de tu Base de Datos
2. Implementa Validación de Datos en el Frontend y Backend
3. Usa Mensajes de Confirmación y Advertencia
4. Proporciona Retroalimentación en Tiempo Real
5. Limita el Acceso a las Funcionalidades según los Permisos del Usuario
6. Realiza Copias de Seguridad Regularmente

Implementando estos consejos, podrás aprovechar al máximo tu aplicación CRUD y garantizar una gestión eficiente y segura de tus datos de usuario.

