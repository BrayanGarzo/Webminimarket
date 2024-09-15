<?php
class cmdCrearUsuario
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        //print_r($_REQUEST);
        $u = new usuariosControl();
        $result = $u->registrar($id, $nombre, $email, $password, $id_cargo, $estado);
        $datos = $u->listarUsuarios();
        switch ($result) {
            case 0:

                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Faltan Datos",
                    "view" => "usuarios/index"
                ];
                break;
            case 1:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Usuario ya existe con el mismo email",
                    "view" => "usuarios/index"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Usuario no creado",
                    "view" => "usuarios/index"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Usuario Creado satisfactoriamente",
                    "view" => "usuarios/index"
                ];
                break;
        }
        return $response;
    }
}