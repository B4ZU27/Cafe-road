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
                                <h1>Inicio</h1>
                            </a>
                        </li>
                        <li class="menu-elemento">
                            <a href="#">
                                <h2>Registros</h2>
                            </a>
                        </li>
                        <li class="menu-elemento">
                            <a href="index3.php">
                                <h3>Operaciones</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contenido">
            <div class ="texto">
            <!-- <div class="texto">
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur eaque, esse tempora quibusdam velit sint a assumenda vel nulla distinctio minus ullam temporibus. Fuga error fugit tenetur rem ex sed.
                </p>
            </div>
            <div> -->
                <div>
                    <button class="Agregar_Pro">
                        <a class="agregar-boton" href="procesos_vista.php"><a1>Agregar Procesos</a1></a>
                    </button>
                </div>
                <br><br>
                <div>
                <form action="agregar_v.php" method="post">
                    <button type="submit" class="tables" name="tables" value="_experimento"><a2>Agregar Registros</a2></button>
                </form>
                </div>
                <br><br>
                <div>
                <form action="mostrar.php" method="post">
                    <button type="submit" class="tables" name="tables" value="_experimento"><a3>Mostrar Registros</a3></button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="src/css/script.js"></script>
</body>
</html>
