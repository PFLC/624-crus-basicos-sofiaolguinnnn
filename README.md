# PHP CRUD Application

This repository contains a simple PHP CRUD (Create, Read, Update, Delete) application. It's a basic demonstration of how to integrate PHP with a MySQL database to manage user data. The application allows users to add, view, edit, and delete user information.

## Tech Stack

- **PHP:** Server-side scripting language used for web development.
- **MySQL:** Database management system used for storing user data.
- **HTML & CSS:** Used for structuring and styling the web pages.
- **Tailwind CSS:** A utility-first CSS framework for rapid UI development.

## Pages and Features

### 1. Home Page (`display.php`)

![Home Page](images/display.png)

- **Functionality:** Displays all users from the database in a table format.
- **Features:** 
  - View all users.
  - Navigation links to add, edit, or delete user information.

### 2. Add User (`user.php`)

![Add User](images/add.png)

- **Functionality:** Allows adding a new user to the database.
- **Features:** 
  - Form to input user details (name, email, mobile, password).
  - Data validation and submission to the database.

### 3. Edit User (`edit.php`)

![Edit User](images/edit.png)

- **Functionality:** Enables editing details of existing users.
- **Features:** 
  - Pre-filled form with user's current information.
  - Update user details in the database.

### 4. Delete User (`delete.php`)

- **Functionality:** Facilitates the deletion of a user from the database.
- **Features:** 
  - Deletion of user information based on user ID.

## Database Connection (`connect.php`)

- **Purpose:** Establishes a connection to the MySQL database.
- **Credentials:** Uses hostname, username, password, and database name for connection.

## How to Run

1. Clone the repository to your local machine.
2. Set up a PHP and MySQL environment (like XAMPP).
3. Create the database using phpmyadmin.
4. Run the application on a local server.

## Security Note

This application is a basic demonstration and does not implement advanced security measures. It's advisable to use prepared statements or ORM for database interactions to prevent SQL injection attacks.

---

Feel free to contribute to this project or suggest improvements. For any queries or issues, please open an issue in this repository.
