<?php
class cmdCrearVenta
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->registrarVenta($id_venta, $fecha, $idCliente, $cod_producto, $cantidad, $valor_unitario, $total);
        //print_r($result);
        $datos = $u->listarVenta();
        switch ($result) {
            case 0:

                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Faltan Datos",
                    "view" => "ventas/index"
                ];
                break;
            case 1:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Venta ya existe con el mismo Id",
                    "view" => "ventas/index"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Venta no creada",
                    "view" => "ventas/index"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Venta Creada satisfactoriamente",
                    "view" => "ventas/index"
                ];
                break;
        }
        return $response;
    }
}