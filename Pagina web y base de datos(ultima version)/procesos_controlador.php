<?php
    include("connect.php");

    $nombre = $_REQUEST['nombre'];
    $sql = "CREATE TABLE " . $nombre . "_experimento(ID INT(10) AUTO_INCREMENT PRIMARY KEY";
    $qty = $_POST['qty'];
    if (is_array($qty))
    {
        for ($i=0;$i<sizeof($qty);$i++)
        {
            $sql = $sql . "," . $qty[$i] . " FLOAT(11)";
        }
    }
    $sql .= ")";

    if($conn->query($sql) === true){
        // echo "La tabla se creó correctamente...";
    }else{
        die("Error al crear la tabla: " . $conn->error);
    }

    $sql = "CREATE TABLE " . $nombre . "_medicion(ID INT(10) AUTO_INCREMENT PRIMARY KEY,";
    $qry = $_POST['qry'];
    if (is_array($qry))
    {
        for ($i=0;$i<sizeof($qry);$i++)
        {
            $sql = $sql . $qry[$i] . " FLOAT(11),";
        }
    }
    $sql .= "Experimento INT(10))";

    if($conn->query($sql) === true){
        // echo "La tabla se creó correctamente...";
    }else{
        die("Error al crear la tabla: " . $conn->error);
    }

    $sql = "ALTER TABLE ". $nombre . "_medicion add foreign key (Experimento) references " . $nombre . "_experimento (ID)";
    if($conn->query($sql) === true){
        echo "<h1>EL PROCESO HA SIDO CREADO</h1>";
    }else{
        die("Error al crear la tabla: " . $conn->error);
    }
    

?>
<br><hr><br>
<a href="index3.php"><strong>REGRESAR A INICIO</strong></a>