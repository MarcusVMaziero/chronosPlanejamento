<!doctype html>
<html lang="pt">

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="js/controller.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Chronos Planejamento - 2018</title>

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="controller.php?acao=acessar_sistem">
      <input type="hidden" name="verifica" value="0">
      <img class="mb-4" src="img/logo.png" alt="" width="200">
      <h1 class="h3 mb-3 font-weight-normal" id="titulo">Chronos Planejamento</h1>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>

      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha" required>

      <input type="button" class="btn btn-default" style="background-color: transparent;" id="esqueceu" name="esqueceu" value="Esqueci a senha">
      <br>
      <input class="btn btn-lg btn-primary btn-block" type="submit" id="enviar" value="Entrar">
      <p class="mt-5 mb-3 text-muted"> <?php  echo date("Y"); ?> Chronos Planejamento &copy;</p>
    </form>
  </body>
</html>
