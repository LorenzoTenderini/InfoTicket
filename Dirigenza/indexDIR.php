<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Direzione</title>
    <?php
      session_start();

      if ($_SESSION["logged"] == 0) {
        header("location: ../index.php");
      }
    ?>

    <link rel="stylesheet" href="../dist/indexDIR.css">
  	<link rel="stylesheet" href="..\node_modules\bootstrap\dist\css\bootstrap.min.css">

  </head>
  <body class="font-merriweather">

    <?php include("../common/navbar.php");stamp(2);?>

    <div class="container stamp_amm">
      <div class="row font-bold font-size-5 mb-4">
        <div class="col-2">
          Dirigenti:
        </div>
      </div>
      <div class="row">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr class="font-regular font-size-3">
                <th scope="col">ID</th>
                <th scope="col">User</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Mail</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="font-size-2">
              <?php include("stampDIR.php");?>
            </tbody>
          </table>
        </div>
      </div>
      <?php
        if ($_SESSION["ruolo"] == 1) {
          echo '
          <div class="row">
            <div class="col-md-1 offset-md-11 p-0 mt-4">
              <a href="../Add Page/addDIR.php"><button class="btn btn-info" name="button">Aggiungi</button></a>
            </div>
          </div>
          ';
        }
      ?>
    </div>

    <script type="text/javascript" src="..\dist\indexDIR.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
