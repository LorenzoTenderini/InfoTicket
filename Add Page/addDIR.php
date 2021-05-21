<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aggiungi Dirigente</title>

    <link rel="stylesheet" href="../dist/addAMM.css">
    <link rel="stylesheet" href="..\node_modules\bootstrap\dist\css\bootstrap.min.css">

    <?php
      session_start();

      if ($_SESSION["logged"]==0) {
        header("location: ../index.php");
      }
      else {
        if ($_SESSION["ruolo"] != 1) {
          header("location: ../index.php");
        }
      }
    ?>

  </head>
  <body class="font-merriweather">

    <?php include("../common/navbar.php"); stamp(2)?>


    <form action="../common/add_dir.php" method="post" id="ins_amm">
      <div class="container mt-5">
        <div class="row mb-4">
          <div class="col-md-6 font-bold font-size-5 offset-md-2 mt-5">
            Aggiungi Dirigente:
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-3 offset-md-2 font-size-2 font-regular">
            <label for="username">E-mail:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="prova@esempio.com">
            <div id="email_msg"></div>
          </div>

          <div class="col-md-3 font-size-2 font-regular">
            <label for="name">Username:</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            <div id="username_msg"></div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-3 offset-md-2 font-size-2 font-regular">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
            <div id="name_msg"></div>
          </div>

          <div class="col-md-3 font-size-2 font-regular">
            <label for="surname">Surname:</label>
            <input type="text" class="form-control"  name="surname" id="surname" placeholder="Surname">
            <div id="surname_msg"></div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-3 offset-md-2 font-size-2 font-regular">
            <label for="name">Password:</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <div id="password_msg"></div>
          </div>

          <div class="col-md-3 font-size-2 font-regular">
            <label for="surname">Conferma password:</label>
            <input type="password" class="form-control"  name="conf_password" id="conf_password" placeholder="Conferma password">
            <div id="conf-password_msg"></div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-1 offset-md-7">
            <button type="submit" name="button" class="btn btn-info" id="btn-submit">Aggiungi</button>
          </div>
        </div>
      </div>
    </form>


    <script type="text/javascript" src="../dist/addDIR.bundle.js">

    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
