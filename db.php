<?php
define('SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DB_NAME', 'world');
$conn = new mysqli( SERVER, USER, PASSWORD, DB_NAME );

// if($conn->connect_error) {
//   echo $conn->connect_error;
// } else {
//   echo "Connection to database established successfully!";
// }
