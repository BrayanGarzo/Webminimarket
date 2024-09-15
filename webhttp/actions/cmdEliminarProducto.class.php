<?php
class cmdEliminarProducto
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        if (is_array($params))
        $cod_producto=$params[0];
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->eliminarProducto($cod_producto);
        $datos = $u->listarProducto();

        switch ($result) {
            case 0:

                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Faltan Datos",
                    "view" => "productos/index"
                ];
                break;
            case 1:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Producto ya existe con ese codigo",
                    "view" => "productos/index"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "<h4>Producto no eliminado</h4>",
                    "view" => "productos/index"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "<h5>Producto eliminado satisfactoriamente</h5>",
                    "view" => "productos/index"
                ];
                break;
        }
        return $response;
    }
}