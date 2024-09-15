<?php

class cmdConsultarUsuarios
{
    private $default_request_method = "GET";
    public function execute()
    {
     valid_method($this->default_request_method);
        $u = new usuariosControl();

        $result = $u->listarUsuarios();
        $response = [
            "result" => "success",
            "data" => $result,
            "message" => "<h4>Listado generado</h4>"
        ];

        if(!CALL_API == true) // Debe mostrar una pantalla html

        $response["view"] = "usuarios/index";

        return ($response);


        //print_r(json_encode($result));
    }
}
