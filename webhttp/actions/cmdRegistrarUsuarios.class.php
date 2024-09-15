<?php

class cmdRegistrarUsuarios
{


    public function execute()
{
    extract($_REQUEST);
    $u = new usuariosControl();
    $result = $u->registrar($id, $nombre, $email, $password, $id_cargo);
    switch ($result) {
        case 0:

            $response = [
                "result" => "bad",
                "data" => "",
                "message" => "Faltan Datos"
            ];
            break;
        case 1:
            $response = [
                "result" => "bad",
                "data" => "",
                "message" => "Usuario ya existe con el mismo email"
            ];
            break;
        case 2:
            $response = [
                "result" => "bad",
                "data" => "",
                "message" => "Usuario no creado"
            ];
            break;
        case 3:
            $response = [
                "result" => "bad",
                "data" => "",
                "message" => "Usuario Creado satisfactoriamente"
            ];
            break;
    }
    print_r(json_encode( $response));
}
}