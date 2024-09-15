<?php

class cmdDefaultEditarProducto
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        //print_r($params);
        valid_method($this->default_request_method);

        if (!is_array($params))
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan Parametros"
            ];

        else {

            $cod_producto = $params[0];
            //print_r($params);
            extract($_REQUEST);
            $u = new usuariosControl();
            $result = $u->buscarProductos($cod_producto);
            if (is_array($result)) {
                $response = [
                    "result" => "success",
                    "data" => $result,
                    "message" => "",
                    "view" => "productos/editer"

                ];
            }
            if ($result == 0) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "<h4>Faltan Datos</h4>",
                    
                ];
            }
            if ($result == 1) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "<h4>Producto No Encontrado</h4>",
                    "view" => "productos/index"


                ];
            }
        }
        if (!CALL_API == true)  // Debe mostrar un pantalla HTML

            return $response;


        //print_r(json_encode($response));
    }
}
