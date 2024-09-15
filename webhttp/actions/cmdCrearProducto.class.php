<?php
class cmdCrearProducto
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->registrarProducto($cod_producto, $nombreProducto, $stock, $valor_unitario, $estado);
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
                    "message" => "producto ya existe con el mismo codigo",
                    "view" => "productos/index"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Producto no creado",
                    "view" => "productos/index"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Producto Creado satisfactoriamente",
                    "view" => "productos/index"
                ];
                break;
        }
        return $response;
    }
}