<!DOCTYPE html>
<html>
<head>
	<title>
		Accedi
	</title>

	<?php

		session_start();

		if (isset($_SESSION["pass-err"]) && isset($_SESSION["user-err"])) {
			if ($_SESSION["pass-err"]==1) {
				echo "<script>alert('Password errata')</script>";
				$_SESSION["pass-err"]=0;
			}
			if ($_SESSION["user-err"]==1) {
				echo "<script>alert('User errato')</script>";
				$_SESSION["user-err"]=0;
			}
		}
		$_SESSION["logged"]=0;
		session_destroy();
	?>

</head>
<body>
	<script type="text/javascript" src="dist/index.bundle.js"></script>
	<link rel="stylesheet" href="dist/index.css">
	<link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">

	<div class="container-fluid my-container">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<div class="container">
					<div class="row ">
						<div class="col-md-9 offset-md-2 font-bold font-size-4">
							Accedi al nostro sito
						</div>
					</div>
					<form action="verificaCredenziali.php" method="post" id="form">
						<div class="row font-size-2 font-regular">
							<div class="col-md-1 mt-5 offset-md-2">
								Username:
							</div>
							<div class="col-md-8 offset-md-2">
								<input type="text" class="form-control" name="username" placeholder="Username" id="username">
							</div>
						</div>
						<div class="row font-regular">
							<div class="col-md-8 offset-md-2">
								<p class="error-message hide" id="error1-user"> *Campo obbligatorio* </p>
							</div>
						</div>
						<div class="row font-size-2 font-regular">
							<div class="col-md-1 mt-3 offset-md-2">
								Password:
							</div>
							<div class="col-md-8 offset-md-2">
								<input type="password" class="form-control" name="password" placeholder="Password" id="password">
							</div>
						</div>
						<div class="row font-regular">
							<div class="col-md-8 offset-md-2">
								<p class="error-message hide" id="error1-pass"> *Campo obbligatorio* </p>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-1 offset-sm-8">
								<button class="btn btn-success" type="submit" name="submit" id="prova">Accedi</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
