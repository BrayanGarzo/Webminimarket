<?php


class usuariosModelo
{
    var $conexion;

    function __construct()
    {
        $con = new mysql();
        $this->conexion = $con->getConexion();
    }

    public function getAllUsuarios()
    {
        $sql = "SELECT * FROM usuario";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM usuario WHERE id = $id";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function validarUsuario($email, $password)
    {
        $sql = "SELECT * 
                FROM usuario 
                WHERE email= '$email' 
                AND  password='$password'";
        //print_r($sql);
        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function getByEmail($email)
    {
        $sql = "SELECT * 
                FROM usuario
                WHERE email = '$email'";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertar($id, $nombre, $email, $password, $id_cargo, $estado)
    {
        $sql = "INSERT 
                INTO usuario
                VALUES ($id,'$nombre','$email','$password', $id_cargo, '$estado')";

        $result = $this->conexion->query($sql);

        return $result;
    }

    public function actualizar($id, $nombre, $email, $id_cargo, $estado)
    {
        $sql = "UPDATE  usuario
                SET nombre = '$nombre',
                    email ='$email',
                    id_cargo = '$id_cargo',
                    estado = '$estado'
                WHERE id = $id";

        $result = $this->conexion->query($sql);

        return $result;
    }

    public function actualizarPassword($id, $password)
    {
        $sql = "UPDATE  usuario
                SET password ='$password'
                WHERE id = $id";

        $result = $this->conexion->query($sql);

        return $result;
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM  usuario  WHERE id = $id";

        $result = $this->conexion->query($sql);

        return $result;
    }

    public function getAllProductos()
    {
        $sql = "SELECT * FROM producto";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getBycodProducto($cod_producto)
    {
        $sql = "SELECT * 
                FROM producto
                WHERE cod_producto = $cod_producto";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function insertarProducto($cod_producto, $nombreProducto, $stock, $valor_unitario, $estado)
    {
        $sql = "INSERT 
            INTO producto
            VALUES ($cod_producto, '$nombreProducto', $stock, $valor_unitario, '$estado' )";

        $result = $this->conexion->query($sql);

        return $result;
    }
    public function actualizarProducto($cod_producto, $nombreProducto, $stock, $valor_unitario, $estado)
    {
        $sql = "UPDATE producto
            SET  nombreProducto ='$nombreProducto',
                 stock = $stock,
                 valor_unitario = $valor_unitario,
                 estado = '$estado'
            WHERE cod_producto = $cod_producto";

        $result = $this->conexion->query($sql);

        return $result;
    }
    public function eliminarProduct($cod_producto)
    {
        $sql = "DELETE FROM  producto  WHERE cod_producto = $cod_producto";

        $result = $this->conexion->query($sql);

        return $result;
    }
    public function getAllVentas()
    {
        $sql = "SELECT *
        FROM venta
        INNER JOIN producto ON venta.cod_producto = producto.cod_producto
        INNER JOIN usuario ON venta.idCliente = usuario.id";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getByidVenta($id_venta)
    {
        $sql = "SELECT * 
                FROM venta
                WHERE id_venta = $id_venta";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function insertarVenta($id_venta, $fecha, $idCliente, $cod_producto, $cantidad, $valor_unitario, $subtotal, $total)
    {
        $sql = "INSERT 
            INTO venta 
            VALUES ($id_venta, '$fecha', $idCliente, $cod_producto, $cantidad, $valor_unitario, $subtotal, $total )";

        $result = $this->conexion->query($sql);

        return $result;
    }
    public function actualizarVenta($id_venta, $fecha, $idCliente, $cod_producto, $cantidad, $valor_unitario, $subtotal, $total)
    {
        $sql = "UPDATE venta
            SET  fecha = '$fecha',
                 idCliente = $idCliente,
                 cod_producto = $cod_producto,
                 cantidad = $cantidad,
                 valor_unitario = $valor_unitario,
                 subtotal = $subtotal,
                total = $total
            WHERE id_venta = $id_venta";

        $result = $this->conexion->query($sql);

        return $result;
    }
    public function getAllDetalles()
    {
        $sql = "SELECT 
              p.nombreProducto,
              v.cod_producto,
              v.cantidad,
              v.valor_unitario,
              v.subtotal,
              v.total
              FROM venta AS v
              INNER JOIN producto  AS p ON v.cod_producto = p.cod_producto";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getByidDetalles($num_factura)
    {
        $sql ="SELECT 
              p.nombreProducto,
              v.num_factura,
              v.cod_producto,
              v.cantidad,
              v.valor_unitario,
              v.subtotal,
              v.total
             FROM venta AS v
            INNER JOIN producto  AS p ON v.cod_producto = p.cod_producto
           WHERE num_factura = $num_factura";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function insertarDetalles($id_venta, $cod_producto, $cantidad, $valor_unitario, $subtotal, $total)
    {
        $sql = "INSERT 
            INTO venta
            VALUES ($id_venta, $cod_producto, $cantidad, $valor_unitario, $subtotal, $total )";

        $result = $this->conexion->query($sql);

        return $result;
    }
}
