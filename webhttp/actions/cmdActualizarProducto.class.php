<?php
class cmdActualizarProducto
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        //print_r($_REQUEST);
        $u = new usuariosControl();
        $result = $u->modificarProducto($cod_producto, $nombreProducto, $stock, $valor_unitario, $estado) ;
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
                    "message" => "<h4>Producto No existe con ese Codigo</h4>",
                    "view" => "productos/index"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Producto no actualizado",
                    "view" => "productos/index"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "<h5>Producto Actualizado satisfactoriamente</h5>",
                    "view" => "productos/index"
                ];
                break;
        } //Fin Switch
        return $response;
    }
}