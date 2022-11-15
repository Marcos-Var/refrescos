<?php
    $dsn = 'mysql:dbname=refrescos;host=localhost';
    $usuario = 'root';
    $contraseña = '';
    $nombre=$_POST["nombre"];
    $id=$_POST["ident"];


    try {
        $pdo = new PDO($dsn, $usuario, $contraseña);
        $sql = "INSERT INTO refrescos (id,nombre) VALUES (?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$id,$nombre]);
        echo "Conectado";
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>