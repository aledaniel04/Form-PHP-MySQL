<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="fondo">
    <div class="fondo-transparente">
        <div class="encabezado">
            <h1 class="texto-aliniar">Encuesta Dane</h1>
            <p>Con estas encuesta se busca recolectar información que permita determinar y caracterizar las condiciones de vida de la población del país</p>
        </div>
        <div class="container-padre">
            <form action="enviar_datos.php" method="post" class="formulario">
                <label for="nombre">Nombre</label>
                <input class="input-estilo" type="text" name="nombre" placeholder="Introduce tu nombre" required="">

                <label for="apellido">Apellido</label>
                <input class="input-estilo" type="text" name="apellido" placeholder="Introduce tu apellido" required="">

                <label for="cedula">Cedula</label>
                <input class="input-estilo" type="number" name="cedula" placeholder="Introduce tu cedula" required="">
                
                <label for="correo">Email</label> 
                <input class="input-estilo" type="email" name="correo" placeholder="Introduce tu correo" required="@">
    
                <label for="edad">Edad</label>
                <input class="input-estilo" type="number" name="edad" placeholder="Intruce tu edad">

                <label>identifica tu genero</label>
                <div class="input-radio">
                <input type="radio" name="genero" value="hombre" required>
                <label for="hombre">Hombre</label><br>
                <input type="radio" name="genero" value="mujer" required>
                <label for="mujer">Mujer</label><br>
                <input type="radio" name="genero" value="otros" required>
                <label for="no-binare">Otros</label> <br>
                </div>

                <div class="boton-enviar">
                    <button type="submit" class="btn">Enviar</button>
                    <button class="btn btn-mostrar"><a href="mostrar_datos.php">mostrar los datos</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>