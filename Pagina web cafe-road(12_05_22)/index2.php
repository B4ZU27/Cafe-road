<?php
    session_start();
    include('DataBase.php');

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');//conn es el objeto de conexion con la base de datos y su metodo prepare es como una consulta a la BD como un query
        $records->bindParam(':email',$_POST['email']);//mediante el metodo POST nos manda datos el navegador
        $records->execute();//con esto se ejecuta la consulta guardada en $records
        $results = $records->fetch(PDO::FETCH_ASSOC); //obtenemos los datos del usuario

        $message= '';

        if($results && $_POST['password'] == $results['password']){//verifica que coincida el password
            $_SESSION['user_id'] = $results['id'];
            header('Location: index.php');//aqui redirige a la pagina principal, se pone el nombre de la carpeta del proyecto, que lleva al index inicial o pongan el primer index, lo cambie para ver algo pero es originalmente a /carpetadelproyecto
        } else {
            $message = 'Contraseña inconsistente';
            //----------------------------------------------------------------
            $_SESSION['message'] = $message;
            $_SESSION['message_type'] = 'danger';

        }
    }


?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/css/estilo.css" >
    <title>Inicio de Sesion</title>
    <?php include("src/bootstrap.php") ?>
  </head>
  <body>
    <a href="index.php">Volver a casa</a>
    <section class="form-InicioSesion" >

      <?php if(!empty($message)) : ?>
          <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php endif; ?>
      <form  action="index2.php" method="post">
        <h1>Usuario</h1>
        <input class="controls" type="text" name="email" placeholder="Ingresa Usuario">
        <h2>Contraseña</h2>
        <input class="controls" type="password" name="password" placeholder="Ingresa contraseña">

        <input class="buttons" type="submit" value="Ingresar">
    </form>

    </section>
    <?php include("src/bootstrapfooter.php") ?>
  </body>
</html>
