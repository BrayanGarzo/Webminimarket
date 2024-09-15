<?php
class cmdEliminarUsuario
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        if (is_array($params))
        $id=$params[0];
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->eliminar($id);
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
                    "message" => "Producto ya existe con ese Id",
                    "view" => "usuarios/index"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "<h4>Usuario no eliminado</h4>",
                    "view" => "usuarios/index"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "<h5>Usuario eliminado satisfactoriamente</h5>",
                    "view" => "usuarios/index"
                ];
                break;
        }
        return $response;
    }
}