<?php
     //define our database connection parameters using constants
   define('DB_HOST', '');  // Define your host
   define('DB_USER', ''); // define your username
   define('DB_PASS', ''); // define the password
   define('DB_NAME', 'serverside'); // define the database table
   
   //Create a MySQLi resource object
   
   $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
   
   // if error occurs
   $connection_error = mysqli_connect_errno();
   $connection_error_message = mysqli_connect_error();
   
 ?>
 