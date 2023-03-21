  
  <?php

/**
  * Configuration for database connection
  *
  */

$host       = "localhost";
$username   = "user1";
$password   = "pass1";
$dbname     = "test"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );

              