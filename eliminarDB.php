<?php
$dsn = 'mysql:dbname=tareas;host=localhost';
$usuario = 'root';
$contraseña = '';
$id=$_POST["ident"]; 
echo $id;
    try {
        $pdo = new PDO($dsn, $usuario, $contraseña);
        $sql = "delete from tareas where id = ".$id;
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
    } catch (PDOException $e) {
        
    }
?>