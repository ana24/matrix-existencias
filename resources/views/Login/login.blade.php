<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/estilos-login.css') }}" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4 rounded-circle" src="{{ asset('/img/login.png') }}" alt="inicioSesion" width="85" height="90">
      <h2 class="h4 mb-3">Por favor, inicie sesión</h2>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control rounded" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control rounded" placeholder="Contraseña" required>
      <div class="checkbox mb-3">
        <label class="recordar">
          <input type="checkbox" value="remember-me"> Recordar
        </label>
      </div>
      <button class="btn btn-md btn-primary btn-block" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">&copy; MatrixConsulting S.A.C 2018</p>
    </form>

    <script type="text/javascript" src="{{ asset('/js/funciones.js') }}"></script>
  </body>
</html>
