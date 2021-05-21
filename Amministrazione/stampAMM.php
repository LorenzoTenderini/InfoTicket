<?php

  include("../common/connessione-db.php");

  $sql = "SELECT A.* FROM dipendenti A, ruoli B  WHERE A.Ruolo = B.ID_ruolo AND A.Ruolo = 1";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '
      <tr>
        <th scope="row">'.
          $row["ID"].'
        </th>
        <td>'.
          $row["User"].'
        </td>
        <td>'.
          $row["Nome"].'
        </td>
        <td>'.
          $row["Cognome"].'
        </td>
        <td>'.
          $row["Mail"].'
        </td>
        <td>';
        if ($_SESSION["ruolo"] == 1) {
          echo '
          <form id="delete_form" action="../common/delete.php" method="POST">
            <button type="submit" name="delete_btn" class="btn btn-warning" value="'.$row["ID"].'">Delete</button>
          </form>';
        };
      echo '
        </td>
      </tr>
      ';
    }
  }

  $conn->close();
?>
