<?php

  session_start();

  include ("common/connessione-db.php");

  $user = $_POST["username"];
  $pass = $_POST["password"];

  $_SESSION["pass-err"] = 0;
  $_SESSION["user-err"] = 0;
  $_SESSION["logged"] = 0;

  $sql = "SELECT Password, Ruolo FROM dipendenti WHERE User = '$user'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if(password_verify($pass, $row["Password"] )==true)
      {
        $_SESSION["logged"]=1;
        if ($row["Ruolo"]==1) {
          $_SESSION["ruolo"]=1;
          header("location: Amministrazione/indexAMM.php");
        }
        else {
          if ($row["Ruolo"]==2) {
            $_SESSION["ruolo"]=2;
            header("location: Dirigenza/indexDIR.php");
          }
          else {
            if ($row["Ruolo"]==3) {
              $_SESSION["ruolo"]=3;
              header("location: Impiegati/indexIMP.php");
            }
          }
        }

      }
      else {
        $_SESSION["pass-err"]=1;
        $_SESSION["logged"]=0;
        header("location: index.php");
      }
    }
  }
  else {
    $_SESSION["user-err"]=1;
    $_SESSION["logged"]=0;
    header("location: index.php");
  }

  $conn->close();


  /*
  Root -> 12345
  Lorenzo -> ciao
  Nicolas -> miao
  Prova -> prova
  */
?>
