<?php

  include("connessione-db.php");

  $id = $_POST["delete_btn"];

  $sql = "DELETE FROM dipendenti WHERE ID = $id";

  if ($conn->query($sql) === TRUE) {
    header("location: ../Amministrazione/indexAMM.php");
  }
  else {
  echo "Error deleting record: " . $conn->error;
  }

  $conn->close();
?>
