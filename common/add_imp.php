<?php

  include("connessione-db.php");

  $mail = $_POST["email"];
  $user = $_POST["username"];
  $nome = $_POST["name"];
  $cognome = $_POST["surname"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $ruolo = 3;

  $sql = "INSERT INTO dipendenti (User, Password, Ruolo, Nome, Cognome, Mail) VALUES ('$user', '$password', $ruolo, '$nome', '$cognome', '$mail');";

  if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  header("location: ../Add Page/addIMP.php")
?>
