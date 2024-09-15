<?php

class cmdRegisterUsuario
{


    public function execute()
    
{
    extract($_REQUEST);
    $u = new usuariosControl();
    $result = $u->registrar($id, $nombre, $email, $password, $id_cargo, $estado);
    switch ($result) {
        case 0:

            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan Datos",
                "view" => "usuarios/registro"
                
            ];
            break;
        case 1:
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Usuario ya existe con el mismo email",
                "view" => "usuarios/registro"
                
            ];
            break;
        case 2:
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Usuario no registrado",
                "view" => "usuarios/registro"
                
            ];
            break;
        case 3:
            $response = [
                "result" => "success",
                "data" => "",
                "message" => "Usuario Registrado satisfactoriamente",
                "view" => "login"
                
            ];
            break;
    }
    return $response;
    //print_r(json_encode( $response));
}
}
