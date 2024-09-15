<?php
class cmdAñadirProducto
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->registrarDetalles($id_venta, $cod_producto, $cantidad, $valor_unitario, $total);
        //print_r($result);
        $datos = $u->listarDetalles();
        switch ($result) {
            case 0:

                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Faltan Datos",
                    "view" => "ventas/Detalles"
                ];
                break;
            case 1:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Venta ya existe con el mismo Id",
                    "view" => "ventas/Detalles"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Venta no creada",
                    "view" => "ventas/Detalles"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Venta Creada satisfactoriamente",
                    "view" => "ventas/Detalles"
                ];
                break;
        }
        return $response;
    }
}