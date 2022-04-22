<!-- <html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php

echo "El nombre ingresado:" . $_REQUEST['nombre'];
echo "<br>";

  $qty = $_POST['qty'];
  if (is_array($qty))
  {
    for ($i=0;$i<sizeof($qty);$i++)
    {
        print ($qty[$i]);
    }
  }
  ?>
</body>

</html>  -->

<?php
$servidor = "localhost";
$nombreusuario = "root";
$password = "";
$db = "CafeRoad";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if($conexion->connect_error){
    die("Conexion fallida: ".$conexion->connect_error);
}

$result = $conexion->query("SELECT * FROM _experimento");
// $result = $conexion->query("SHOW TABLES");

$all = $result->fetch_all();

//$col = $all[0];
echo "<table>";
for($i=0;$i<sizeof($all);$i++)
{
  echo "<tr>";
  for($j=0;$j<sizeof($all[$i]);$j++)
  {
    echo "<td>".$all[$i][$j]."</td>";
  }
  echo "</tr>";
}
echo "</table>";

echo "<pre>";
print_r($all);
?>

<!-- <p><strong>Select your table.</strong></p> 
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

?> -->

<!-- <p><strong>Select your colum.</strong></p> 
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
  $result = $conexion->query("SHOW COLUMNS FROM _experimento");
  while($valores = mysqli_fetch_array($result)){
    echo '"<option value="'.$valores[0].'">'.$valores[0].'</option>';
  }

?> -->

<!-- <form action="pruebas2.php" method="post">
    <p><strong>Select your table.</strong></p> 
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
</form> -->

<!-- <form action="pruebas2.php" method="post">
    <select name="Fruit">
        <option value="" disabled selected>Choose option</option>
        <option value="Apple">Apple</option>
        <option value="Banana">Banana</option>
        <option value="Coconut">Coconut</option>
        <option value="Blueberry">Blueberry</option>
        <option value="Strawberry">Strawberry</option>
    </select>
    <input type="submit" name="submit" vlaue="Choose options">
</form> -->