<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio Sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="shortcut icon" href="img/libro.ico">
    <link href="css/estilo.css" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body style="background-color:rgb(0, 0, 0);background-image:url(img/li.jpg);background-repeat: no-repeat; background-position: center center;background-attachment: fixed;background-size:cover">
    <div style="background-color:#000000a1;width:100%;height: 100%;position:absolute;left:0;top:0;">
    <header>
    <nav class="navbar1 navbar-expand-md fixed-top" style="background: #000000b5">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="margin-top: 5px;margin-bottom: 5px;width: 180px;margin-left: 100px;"></a>
    </nav>
    </header>
    <!--Main-->
    <main>
        <div id="menu">
            <div class="inicio">Inicio de Sesión</div>
            <div class="campos">Todos los campos son obligatorios</div>
            <div class="correo"><input type="text" placeholder="Correo o Nombre de usuario" class="input"></div>
            <div class="correo"><input type="password" placeholder="Contraseña" class="input"></div>
            <div class="boton1">
            <button type="button" class="boton2">
                <a href="home.php" class="log"><span>Login</span></a>
            </button>
            <button type="button" class="boton3">
                <a href="registro.php" class="log"><span>Registrarse</span></a>
            </button>
            <a href="#" class="contra">Olvidó su contraseña</a>
            </div>
        </div>
    </main>
    <!--Fin main-->
    <footer>
    <nav class="navbar1 navbar-expand-md fixed-top piepag">
        <div class="pag1">Llamar al
          <a href="#" id="color" style="margin-left: 6px;">+(504) 2240-05-20</a>
          <span class="divider0">·</span>
          <a href="#" id="color">Declaración de Publicidad</a>
          <span class="divider0">·</span>
          <a href="#" id="color">Términos de Uso</a>
          <span class="divider0">·</span>
          <a href="#" id="color">Centro de Ayuda</a>
        </div>
    </nav> 
    </footer>
    </div>
</body>
</html>