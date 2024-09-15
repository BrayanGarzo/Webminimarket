<?php
class cmdActualizarUsuario
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        //print_r($_REQUEST);
        $u = new usuariosControl();
        $result = $u->modificar($id, $nombre, $email, $id_cargo, $estado);
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
                    "message" => "<h4>Usuario No existe con ese ID</h4>",
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
                    "message" => "<h5>Usuario Actualizado satisfactoriamente</h5>",
                    "view" => "usuarios/index"
                ];
                break;
        } //Fin Switch
        return $response;
    }
}