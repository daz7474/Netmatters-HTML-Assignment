<?php

function postData($name, $email, $companyName, $telephone, $message, $marketing)
{
  include("db-conn.php");

  try {
    $sql = $conn->prepare('
    INSERT INTO contact_form (name, email, company_name, phone, message, marketing)
    VALUES (?, ?, ?, ?, ?, ?);
    ');

    $sql->bindValue(1, $name, PDO::PARAM_STR);
    $sql->bindValue(2, $email, PDO::PARAM_STR);
    $sql->bindValue(3, $companyName, PDO::PARAM_STR);
    $sql->bindValue(4, $telephone, PDO::PARAM_STR);
    $sql->bindValue(5, $message, PDO::PARAM_STR);
    $sql->bindValue(6, $marketing, PDO::PARAM_INT);

    $sql->execute();
    return true;
  } catch (PDOException $e) {
      echo 'Unable to send data: ' . $e->getMessage();
      exit;
  }
}

?>