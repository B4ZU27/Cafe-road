<?php
include("connect.php");

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    //$conn = mysqli_connect('localhost', 'root', '', 'caferoad') or die("Connection Failed" .mysqli_connect_error());
    if(isset($_POST['eliminar'])){
        $eliminar = $_POST['eliminar'];

    //mysqli_query($conn, "DELETE FROM `_experimento` WHERE ID = '$eliminar'");
    //$query = mysqli_query($conn, $sql);
    //if($query){
    $qry = "DELETE FROM ".$_REQUEST['tables']." WHERE ID = '$eliminar'";
    if(mysqli_query($conn, $qry)){
            echo '<h1>DATO BORRADO CORRECTAMENTE</h1>';
    }
    else{
        echo "<h1>EL 'ID' INGRESADO NO EXISTE :(</h1>";
    }
    }
    
}
?>
<br><hr><br>
<a href="mostrar.php"><strong>REGRESAR PAGINA ANTERIOR</strong></a>