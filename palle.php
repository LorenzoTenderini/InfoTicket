<?php
  include ("common/connessione-db.php");

  $user = "Prova2";
  $pass = "prova2";
  $ruolo = 1;
  $nome = "prova2";
  $cognome = "prova2";
  $mail = "prova2@libero.it";

  $password = password_hash($pass, PASSWORD_DEFAULT);

  $sql = "INSERT INTO dipendenti (User, Password, Ruolo, Nome, Cognome, Mail) VALUES ('$user', '$password', $ruolo, '$nome', '$cognome', '$mail');";

  if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>
