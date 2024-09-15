<?php

class cmdConsultarProductos
{
    private $default_request_method = "GET";
    public function execute()
    {
     valid_method($this->default_request_method);
        $u = new usuariosControl();

        $result = $u->listarProducto();
        $response = [
            "result" => "success",
            "data" => $result,
            "message" => "<h4>Productos generados</h4>"
        ];

        if(!CALL_API == true) // Debe mostrar una pantalla html

        $response["view"] = "productos/index";

        return ($response);


        //print_r(json_encode($result));
    }
}