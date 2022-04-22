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
                            <a href="#">
                                Registros
                            </a>
                        </li>
                        <li class="menu-elemento">
                            <a href="index3.php">
                                Operaciones
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contenido">
            <div class="contenedor-lista">
                <div class="">
                    <h2>Lista de productos</h2>
                    <form action="agregar_v.php" method="post">
                        <button class="agregar-boton" name="tables" value="_experimento">Agregar</button>
                    </form>
                    <form action="borrar_v.php" method="post">
                        <button class="agregar-boton" name="tables" value="_experimento">Borrar</button>
                    </form>
                    <!-- <a class="agregar-boton" href="agregar.html">Agregar</a> -->
                </div>
                <form action="mostrar.php" method="post">
                    <p><strong>Selecciona el proceso que mostrar.</strong></p>
                    <select name="tables">
                    <?php
                        include("connect.php");
                        $result = $conn->query("SHOW TABLES");
                        while($valores = mysqli_fetch_array($result)){
                            echo '"<option value="'.$valores[0].'">'.$valores[0].'</option>';
                        }
                    ?>
                    </select>
                    <input type="submit" name="submit" vlaue="Choose options">
                </form>
                <br><br>
                <?php
                    echo "<h3>".$_REQUEST['tables']."</h3>";
                    include("connect.php");
                    $qry = "SELECT * FROM ".$_REQUEST['tables'];
                    $qry2 = "SHOW COLUMNS FROM ".$_REQUEST['tables'];
                    $result = $conn->query($qry);
                    $result2 = $conn->query($qry2);

                    $all = $result->fetch_all();

                    echo '<table id="lista-de-productos">';
                    echo "<tr>";
                    while($valores = mysqli_fetch_array($result2)){
                    echo "<td>".$valores[0]."</td>";
                    }
                    echo "</tr>";
                    for($i=0;$i<sizeof($all);$i++)
                    {
                    echo "<tr>";
                    for($j=0;$j<sizeof($all[$i]);$j++)
                    {
                        echo "<td>".$all[$i][$j]."</td>";
                    }
                        echo "<td>";
                        echo '<div class="contenedor-opciones-enlaces">';
                        echo '<a href="#">.</a>';
                        echo "</div>";
                        echo '<div class="contenedor-opciones-enlaces">';
                        echo '<a href="#">.</a>';
                        echo "</div>";
                        echo '<div class="contenedor-opciones-enlaces">';
                        echo '<a href="#">.</a>';
                        echo "</div>";
                        echo "</td>";
                    echo "</tr>";
                    }
                    echo "</table>";
                ?>
                <br><hr><br>
            </div>
            <br><hr><br>
        </div>
    </div>
    <script src="src/css/script.js"></script>
</body>

</html>