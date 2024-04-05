<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Seizear.X">
    <link rel="icon" href="favicon.ico">
    <title>Logowanie</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST">
      <img class="mb-4" src="logo2.png" alt="">
      <h1 class="h5 mb-3 font-weight-normal">Zaloguj się</h1>
      <?php 
      if (isset($_POST['password'])) {echo '<div class="alert alert-danger" role="alert">Błędne dane. Spróbuj ponownie.</div>';}
      ?>
      <label for="inputEmail" class="sr-only">Adres e-mail</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Adres e-mail" value="<?php echo $get; ?>" required>
      <label for="inputPassword" class="sr-only">Hasło</label>
      <input type="hidden" id="inputPassword" name="password" class="form-control" placeholder="Hasło">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" checked="checked"> Pamiętaj mnie
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Zaloguj</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
    </form>
  </body>
</html>
