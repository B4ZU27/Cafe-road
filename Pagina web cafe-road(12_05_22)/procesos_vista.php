<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto asfalto</title>
    <link rel="stylesheet" href="src/css/styles.css">
</head>

<body>
    <div class="conenedor">
        <div class="cabecera">
            <div class="contenedor-titulo">
                <h1>Proyecto asfalto</h1>
            </div>
            <div class="contenedor-menu">
                <div class="menu">
                    <ul class="lista-menu">
                        <li class="menu-elemento">
                            <a href="index.html">
                                <a0>Inicio</a>
                            </a>
                        </li>
                        <li class="menu-elemento">
                            <a href="#">
                                <a6>Registros</a6>
                            </a>
                        </li>
                        <li class="menu-elemento">
                            <a href="index3.php">
                                <a7>Operaciones</a7>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contenido">
            <div class="contenedor-agregar-formulario">
                <div>
                    <h2>Agregar procedimiento</h2>
                </div>
                <form action="procesos_controlador.php" method="post">
                  <fieldset>
                  <div class="contenedor-campo">
                  <a8>Titulo del procedimiento:</a8><input type="text" name="nombre"><br>
                  </div>

                  <a9>Parametros del experimento</a9> <br>
                  <div class="contenedor-campo">
                  1: <input type="text" name="qty[]">
                  </div>
                  <div class="contenedor-campo">
                  2: <input type="text" name="qty[]">
                  </div>
                  <div class="contenedor-campo">
                  3: <input type="text" name="qty[]">
                  </div>
                  <div class="contenedor-campo">
                  4: <input type="text" name="qty[]">
                  </div>
                  Parametros de la medicion <br>
                  <div class="contenedor-campo">
                  1: <input type="text" name="qry[]">
                  </div>
                  <div class="contenedor-campo">
                  2: <input type="text" name="qry[]">
                  </div>
                  <div class="contenedor-campo">
                  3: <input type="text" name="qry[]">
                  </div>
                  <div class="contenedor-campo">
                  4: <input type="text" name="qry[]">
                  </div>
                  <input type="submit" value="Confirmar">
                  </fieldset>
                </form>
                <!-- <form action="agregar_c.php" method="POST">
                    <fieldset>
                        <div class="contenedor-campo">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" id="nombre">
                        </div>
                        <div class="contenedor-campo">
                            <label for="descripcion">Descripción:</label>
                            <input type="text" name="descripcion" id="descripcion">
                        </div>
                        <div class="contenedor-campo">
                            <label for="detalles">Detalles:</label>
                            <input type="text" name="detalles" id="detalles">
                        </div>
                        <div class="contenedor-campo campo-boton-enviar">
                            <span></span>
                            <input type="submit" name="submit" id="submit" value="Enviar">
                        </div>
                    </fieldset>
                </form> -->
            </div>
        </div>
    </div>
    <script src="src/css/script.js"></script>
</body>

</html>

<!-- <html>

<head>
  <title>IngresarProceso</title>
</head>

<body>
  <form action="procesos_controlador.php" method="post">
    Titulo del procedimiento:<input type="text" name="nombre"><br><br>
    Parametros del experimento <br>
    1: <input type="text" name="qty[]"><br>
    2: <input type="text" name="qty[]"><br><br>
    Parametros de la medicion <br>
    1: <input type="text" name="qry[]"><br>
    2: <input type="text" name="qry[]"><br>
    <input type="submit" value="Confirmar">
  </form>
</body>

</html> -->
