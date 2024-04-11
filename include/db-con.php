<?php

try {
  $env = parse_ini_file(".env");
  $host = $env["DB_HOST"];
  $dbname = $env["DB_NAME"];
  $username = $env["DB_USERNAME"];
  $password = $env["DB_PASSWORD"];

  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  } catch (PDOException $e) {
    die ("Could not connect to the database $dbname :" . $e->getMessage());
  }
} catch (PDOException $e) {
  $_SESSION["errMsg"] = "Database info is not correct";
}

?>