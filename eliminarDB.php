<?php
$dsn = 'mysql:dbname=refrescos;host=localhost';
$usuario = 'root';
$contraseña = '';
$id=$_POST["ident"]; 
echo $id;
    try {
        $pdo = new PDO($dsn, $usuario, $contraseña);
        $sql = "delete from refrescos where id = ".$id;
        $stmt= $pdo->prepare($sql);
        $stmt->execute();
    } catch (PDOException $e) {
        
    }
?>