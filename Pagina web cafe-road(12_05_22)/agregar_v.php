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
                            <a href="index.php">
                                Inicio
                            </a>
                        </li>
                        <li class="menu-elemento">
                            <a href="mostrar.php">
                                Registros
                            </a>
                        </li>
                        <li class="menu-elemento">
                            <a href="mostrar.php">
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
                    <h2>Agregar registro</h2>
                    <br>
                    <form action="agregar_v.php" method="post">
                        <p><strong>Selecciona el proceso donde agregar.</strong></p> 
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
                </div>
                <br>
                <form action="agregar_c.php" method="POST">
                    <fieldset>
                    <?php
                    include("connect.php");
                    $qry = "SHOW COLUMNS FROM ".$_REQUEST['tables'];
                    $result = $conn->query($qry);
                    
                    echo '<input type="text" name="tabla" value="'.$_REQUEST['tables'].'" readonly="readonly"/> <br><br>';

                    while($valores = mysqli_fetch_array($result)){
                        if($valores[0]!="ID")
                        {
                            echo '<div class="contenedor-campo">';
                            echo '<label for="'.$valores[0].'"><strong>'.$valores[0].': </strong></label>';
                            echo '<input type="number" step=0.00001 name="rty[]" id="rty[]" autocomplete="off"/>';
                            echo '</div>';
                        }
                        
                    }
                    ?>

                    <input type="submit" name="submit" id="submit" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script src="src/css/script.js"></script>
</body>

</html>