<?php

function stamp($current){

  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 font-merriweather font-regular font-size-2">
    <a class="navbar-brand" href="#">InfoTicket</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
  if ($current == 1) {
    echo '
    <li class="nav-item ">
      <a class="nav-link active" href="../Amministrazione/indexAMM.php"> Amministratori</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../Dirigenza/indexDIR.php"> Dirigenti</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../Impiegati/indexIMP.php"> Impiegati </a>
    </li>';
  }
  if ($current == 2) {
    echo '
    <li class="nav-item">
      <a class="nav-link" href="../Amministrazione/indexAMM.php"> Amministratori</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link active" href="../Dirigenza/indexDIR.php"> Dirigenti</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../Impiegati/indexIMP.php"> Impiegati </a>
    </li>';
  }
  if ($current == 3) {
    echo '
    <li class="nav-item">
      <a class="nav-link" href="../Amministrazione/indexAMM.php"> Amministratori</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../Dirigenza/indexDIR.php"> Dirigenti</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link active" href="../Impiegati/indexIMP.php"> Impiegati </a>
    </li>';
  }
  echo '
        </ul>
        <form class="d-flex">
          <a href="../common/logout.php"> <button type="button" class="btn btn-danger">Logout</button> </a>
        </form>
      </div>
    </nav>
  ';

}

?>
