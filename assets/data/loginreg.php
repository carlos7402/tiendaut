<?php
    include('conexionreg.php');

    $obj = new Conexion;

    $usuario    = $_POST['inputUser'];
    $pass       = $_POST['inputPassword'];
    $nombre     = $_POST['inputNombre'];
    $correo     = $_POST['inputCorreo'];

    //$texto      = "Nombre: " . $usuario . " Contraseña: " . $pass;

    $res = $obj->registroUsuario($usuario,$pass,$nombre,$correo);
    
    if($res == 1){
        $datosreg  = array('dato' => 'ok');
    }else{
        $datosreg  = array('dato' => 'no');
        
    }

    // $datos  = array('datos' => $texto);

    echo json_encode($datosreg, JSON_FORCE_OBJECT);

?>