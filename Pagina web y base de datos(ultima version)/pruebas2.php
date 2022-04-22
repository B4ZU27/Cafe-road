<!-- <?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['tables'])) {
        $selected = $_POST['tables'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }
    }
?> -->

<form action="pruebas2.php" method="post">
    <p><strong>Selecciona el proceso donde agregar.</strong></p> 
    <select name="tables"> 
    <?php
        $servidor = "localhost";
        $nombreusuario = "root";
        $password = "";
        $db = "CafeRoad";
        
        $conexion = new mysqli($servidor, $nombreusuario, $password, $db);
        
        if($conexion->connect_error){
            die("Conexion fallida: ".$conexion->connect_error);
        }
        $result = $conexion->query("SHOW TABLES");
        while($valores = mysqli_fetch_array($result)){
          echo '"<option value="'.$valores[0].'">'.$valores[0].'</option>';
        }
    ?>
    </select>
    <input type="submit" name="submit" vlaue="Choose options">
</form>

<?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['tables'])) {
        $selected = $_POST['tables'];
    } else {
        echo 'ERROR';
    }
    }
?>

<!-- <h1><?php echo $selected ?></h1> -->
<form action="agregar.php" method="POST">

    <?php
    include("connect.php");
    $qry = "SHOW COLUMNS FROM ".$selected;
    $result = $conn->query($qry);
    
    echo '<input type="text" name="tabla" value="'.$selected.'" readonly="readonly"/> <br><br>';

    while($valores = mysqli_fetch_array($result)){
        if($valores[0]!="ID")
        {
            echo '<label for="'.$valores[0].'"><strong>'.$valores[0].': </strong></label><br>';
            echo '<input type="number" step=0.01 name="rty[]" id="rty[]" autocomplete="off"/><br><br>';
        }
        
    }
    ?>

    <input type="submit" name="submit" id="submit" />
</form>