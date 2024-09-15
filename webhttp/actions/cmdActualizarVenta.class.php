<?php
class cmdActualizarVenta
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        //print_r($_REQUEST);
        $u = new usuariosControl();
        $result = $u->modificarVenta($id_venta, $fecha, $idCliente, $cod_producto, $cantidad, $valor_unitario, $total);
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
                    "message" => "<h4>Venta No existe con ese ID</h4>",
                    "view" => "ventas/index"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Venta no actualizada",
                    "view" => "ventas/index"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "<h5>Venta Actualizada satisfactoriamente</h5>",
                    "view" => "ventas/index"
                ];
                break;
        } //Fin Switch
        return $response;
    }
}