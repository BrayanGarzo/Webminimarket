<?php

class cmdDefaultEditarVenta
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

            $id_venta = $params[0];
            extract($_REQUEST);
            $u = new usuariosControl();
            $result = $u->buscarVentas($id_venta);
            if (is_array($result)) {
                $response = [
                    "result" => "success",
                    "data" => $result,
                    "message" => "",
                    "view" => "ventas/edit"

                ];
            }
            if ($result == 0) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "<h4>Faltan Datos</h4>"
                ];
            }
            if ($result == 1) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "<h4>Venta No Encontrada</h4>",
                    "view" => "ventas/index"


                ];
            }
        }
        if (!CALL_API == true)  // Debe mostrar un pantalla HTML

            return $response;


        //print_r(json_encode($response));
    }
}