

<?php
include("connect.php");
$tabla = $_REQUEST['tabla'];
    $sql = "INSERT INTO `".$tabla."` VALUES (NULL";

    $rty = $_POST['rty'];
    if (is_array($rty))
    {
        for ($i=0;$i<sizeof($rty);$i++)
        {
            $sql .= ",'".$rty[$i] . "'";
        }
    }
    $sql .= ")";
    // print_r($sql);
    if($conn->query($sql) === true){
        echo "<h1>SE INSERTO CORRECTAMENTE<h1>";
    }else{
        die("Error al insertar: " . $conexion->error);
    }
?>
<br><hr><br>
<a href="index3.php"><strong>REGRESAR A INICIO</strong></a>
