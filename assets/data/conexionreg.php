<?php
class Conexion{
    var $conn;

    function conectar(){
        $conn = null;
     try{
        $conn = new PDO('mysql:host=localhost;dbname=tiendaut', 
                            'root',
                             '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //echo 'Se estableció la conexión <br> <br>';
        
   }catch(PDOException $e){
        die(print_r('Error conectando a la base de datos:' . $e->getMessage()));
        
   }
   return $conn;
        }

    function registroUsuario($user, $pass, $nombre, $correo){
        $con = $this->conectar();

         //Inserción de un registro
         $stmt = $con->prepare('INSERT INTO usuario (usuario, contrasena, nombre, correo)
                                     VALUES (:user, :pass, :nom, :mail)');
         $rows = $stmt->execute(array(':user'=>$user,
                                         ':pass'=>$pass,
                                         ':nom'=>$nombre,
                                         ':mail'=>$correo));
         if($rows == 1){
             echo 'Inserción correcta';
         }    
        }
    }
?>