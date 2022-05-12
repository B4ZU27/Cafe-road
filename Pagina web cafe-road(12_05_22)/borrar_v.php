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
                                Inicio
                            </a>
                        </li>
                        <li class="menu-elemento">
                            <a href="mostrar.php">
                                Registros
                            </a>
                        </li>
                        <li class="menu-elemento">
                            <a href="index.php">
                                Operaciones
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contenido">
            <div class="contenedor-agregar-formulario">
                <div>
                    <h2>Eliminar registro</h2>
                    <br>
                </div>
                <br>
                <form action="borrar.php" method="POST">
                    <fieldset>
                    <div class="contenedor-campo">
                    <label for="eliminar">SELECCIONA DE QUE PROCESO ELIMINAR:</label>
                    <select name="tables"> 
                    <?php
                        include("connect.php");
                        $result = $conn->query("SHOW TABLES");
                        while($valores = mysqli_fetch_array($result)){
                            echo '"<option value="'.$valores[0].'">'.$valores[0].'</option>';
                        }
                    ?>
                    </select>
                    </div>
                    <div class="contenedor-campo">
                    <label for="eliminar">INGRESE EL 'ID' DEL 'EXPERIMENTO' QUE DESEA BORRAR:</label>
                    <input type="text" name="eliminar" id="eliminar" autocomplete="off" required/> 
                    </div>

                    <input type="submit" name="submit" id="submit" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script src="src/css/script.js"></script>
</body>

</html>


