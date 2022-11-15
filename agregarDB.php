<?php
    // $dato=$_POST["titulo"];

    // // conectar a la base
    // class Conexion{
    //     private $host = "localhost";
    //     private $user = "root";
    //     private $password = "";
    //     private $db = "tareas";
    //     private $conect;

        

    //     public function __construct(){
    //         $conectonString = "mysql:host".$this->host.",dbname=".$this->db."; charset=utf8";
    //         try {
    //             $this->conect = new PDO($conectonString, $this->user, $this->password);
    //             $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     // para detectar mejor los errores
    //             echo "conectado";                
    //         } catch (Exception $e) {
    //             $this->conect = 'Error de conexion';
    //             echo "Error: ". $e->getMessage();
    //         }
    //     }
    // }

    // $conect = new Conexion();

    $dsn = 'mysql:dbname=tareas;host=localhost';
    $usuario = 'root';
    $contraseña = '';
    $tarea=$_POST["titulo"];
    $id=$_POST["ident"];


    try {
        $pdo = new PDO($dsn, $usuario, $contraseña);
        $sql = "INSERT INTO tareas (id,tarea) VALUES (?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$id,$tarea]);
        echo "Conectado";
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>