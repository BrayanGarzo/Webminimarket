<?php
class cmdActualizarPassword
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        //print_r($_REQUEST);
        $u = new usuariosControl();
        $result = $u->actualizarPassword($id, $password);
        switch ($result) {
            case 0:

                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "Faltan Datos",
                    "view" => "usuarios/password"
                ];
                break;
            case 1:
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "<h6>Usuario No existe con ese ID</h6>",
                    "view" => "usuarios/password"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "Contraseña no actualizada",
                    "view" => "usuarios/password"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => "",
                    "message" => "<h5>Contraseña actualizada</h5>",
                    "view" => "usuarios/password"
                ];
                break;
        } //Fin Switch
        return $response;
    }
}