<?php

class cmdConsultarDetalles
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        //print_r($params);
        valid_method($this->default_request_method);
        extract($_REQUEST);
        if (count($params) ==0)
        {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan Parametros"
            ];
        }
        else {

            $num_factura = $params[0];
            //print_r($params);
            $u = new usuariosControl();
            $result = $u->buscarDetalles($num_factura);
            //print_r($result);
            if (is_array($result)) {
                $response = [
                    "result" => "success",
                    "data" => $result,
                    "message" => "",
                    "view" => "ventas/Detalles"

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
                    "message" => "<h4>No existe el Id</h4>",
                    "view" => "ventas/index"


                ];
            }
        }
        if (!CALL_API == true)  // Debe mostrar un pantalla HTML

            return $response;


        //print_r(json_encode($response));
    }
}
