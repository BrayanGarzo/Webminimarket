<?php


class cmdBuscarProductos
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        //print_r($params);
        valid_method($this->default_request_method);
        extract($_REQUEST);
        if(count($params) ==0)
        $response = [
            "result" => "fail",
            "data" => "",
            "message" => "Faltan Parametros"
        ];
        else {

        $cod_producto = $params[0];

        $u = new usuariosControl();
        $result = $u->buscarProductos($cod_producto);
        if (is_array($result)) {
            $response = [
                "result" => "success",
                "data" => $result,
                "message" => "Producto Encontrado"
            ];
        }
        if ($result == 0) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan Datos"
            ];
        }
        if ($result == 1) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Producto No Encontrado"
            ];
        }
        }
        if(!CALL_API == true) // Debe mostrar una pantalla html

        $response["view"] = "productos/editer";

        return ($response);
       

        //print_r(json_encode($response));
    }
}