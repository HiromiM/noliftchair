
  
<?php

/**
  * Open a connection via PDO to create a
  * new database and table with structure.
  *
  */

  $connection = new PDO($dsn, $username, $password, $options);

  $new_user = array(
    "firstname" => $_POST['firstname'],
    "lastname"  => $_POST['lastname'],
    "email"     => $_POST['email'],
    "age"       => $_POST['age'],
    "location"  => $_POST['location']
  );
  
  $sql = sprintf(
      "INSERT INTO %s (%s) values (%s)",
      "users",
      implode(", ", array_keys($new_user)),
      ":" . implode(", :", array_keys($new_user))
  );
  
  $statement = $connection->prepare($sql);
  $statement->execute($new_user);

  