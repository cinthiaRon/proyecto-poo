<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="shortcut icon" href="img/libro.ico">
    <link href="css/estilo.css" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body class="margen">
<header>
    <nav class="navbar1 navbar-expand-md fixed-top" style="background: #000000; border-bottom-color: #48c44d; border-bottom-width: 1px; border-bottom-style: solid;">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="margin-top: 5px;margin-bottom: 5px;width: 180px;margin-left: 100px;"></a>
    </nav>
    <!--Main-->
    <main>
        <div id="menu2" style="background-color:rgb(0, 0, 0);background-image:url(img/fondo1.jpg);background-repeat: no-repeat;background-size:cover">
        <div style="background-color:#000000a1; background-color: #000000ba; height: 520px;">
        <div class="inicio">Abre una Cuenta</div>
            <div class="campos">Todos los campos son obligatorios</div>
            <div style="display: flex;">
            <div class="correo"><input type="text" placeholder="Nombre" class="input1"></div>
            <div class="correo1"><input type="text" placeholder="Apellido" class="input1"></div>
            </div>
            <div class="correo"><input type="text" placeholder="Número de celular o correo electronico" class="input"></div>
            <div class="correo"><input type="password" placeholder="Contraseña" class="input"></div>
            <div class="correo"><input type="date" placeholder="Fecha de nacimiento" class="input"></div>
            <div class="correo2"> Género: 
              <label>Femenino<input type="radio" name="rbt-genero" value="F"></label>
              <label>Masculino<input type="radio" name="rbt-genero" value="M"></label>
            </div>
            <div class="correo3"><input type="checkbox" id="chk-0" name="chk-gustos[]" value="0"><label for="chk-0">
                Si te registras, significa que aceptas los Terminos de servicio y la politica de privacidad, incluido el uso de cookies.</label>
            </div>
            <div class="boton4">
            <button type="button" class="boton3">
                <a href="home.php" class="log"><span>Registrarse</span></a>
            </button>
            </div>
        </div>
        </div>
    </main>
    <!--Fin main-->
</header>
</body>
</html>