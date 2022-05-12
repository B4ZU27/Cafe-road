<?php 
            $host = "localhost";
            $user = "id18818891_root";
            $pass = "@proyectoEquipo2";
            $db = "id18818891_caferoad";        
    try{
        $conn = new PDO("mysql:host=$host;dbname=$db;",$user, $pass);
    } catch(PDOException $e){
        die('Connection failed we: '.$e->getMessage());
    }

?>