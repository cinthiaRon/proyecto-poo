<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/libro.ico">
    <link href="css/estilo.css" rel="stylesheet">
    <script src="main.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body class="margen1">
    <header>
    <nav class="navbar1 navbar-expand-md fixed-top" style="background: #000000; height: 70px;">
    <div style="display: flex;">
        <a class="navbar-brand" href="index.php" style="margin-top: -15px;"><img src="img/logo.png" style="margin-top: 5px;margin-bottom: 5px;width: 180px;margin-left: 70px;"></a>
        <div style="width: 450px; display: flex;">
        <button class="btn btn-black dropdown-toggle" id="menu1" type="button" style="margin-left: -15px;">Cursos</button>
        <button class="btn btn-black dropdown-toggle" id="menu1" type="button" >Grupos</button>
        <button class="btn btn-black" id="menu1" type="button" >Recursos</button>
        <button class="btn btn-black dropdown-toggle" id="menu1" type="button" >Grados</button>
        </div>
        <div class="con1">
        <button class="btn btn-black2" id="menu1" type="button" ><img src="img/lupa.png" style="width: 44px;"></button>
        <button class="btn btn-black1" id="menu1" type="button" ><img src="img/mensaje.png" style="width: 50px;"></button>
        <button class="btn btn-black1" id="menu1" type="button" ><img src="img/campana.png" style="width: 45px;"></button>
        <div class="dropdown">
          <button class="btn btn-black dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">@usuario
          <span class="caret"></span></button>
          <ul class="dropdown-menu drop" role="menu" aria-labelledby="menu1">
            <li role="presentation"><a role="menuitem" class="drop1" id="drop2" style="color: white;"tabindex="-1" href="perfil.php">Perfil</a></li>
            <li role="presentation"><a role="menuitem" class="drop1" id="drop2" style="color: white;"tabindex="-1" href="#">Escuela</a></li>
            <li role="presentation"><a role="menuitem" class="drop1" id="drop2" style="color: white;"tabindex="-1" href="#">Configuración</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" class="drop1" id="drop2" style="color: white;" tabindex="-1" href="login.php">Cerrar Sesión</a></li>    
          </ul>
        </div>
        </div>
    </div>
    </nav>
    </header>
    <!--Body-->
    <div class="centro">
    </div>
    <!--Fin body-->
    <footer>
    <nav class="navbar1 navbar-expand-md fixed-top piepag" style="margin-top: 40px;">
        <div class="pag1" style="margin-left: 40px;">
          <a href="#" id="color" style="margin-left: 6px;">Apoyo</a>
          <span class="divider0">·</span>
          <a href="#" id="color">Declaración de Publicidad</a>
          <span class="divider0">·</span>
          <a href="#" id="color">Términos de Uso</a>
          <span class="divider0">·</span>
          <a href="#" id="color">Centro de Ayuda</a>
          <span class="divider0">·</span>
          Aprendamos © 2019
        </div>
    </nav> 
    </footer>

    <script>
      $(document).ready(function(){
        $(".dropdown-toggle").dropdown();
    });
</script>
</body>
</html>