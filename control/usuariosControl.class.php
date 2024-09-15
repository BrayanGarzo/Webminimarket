<?php

class usuariosControl
{
    var $modelo;

    function __construct()
    {
        $this->modelo = new usuariosModelo();
    }

    public function autenticar($email, $password)
    {
        if (
            !empty($email) && $email != "" && $email != NULL &&
            !empty($password) && $password != "" && $password != NULL
            
        ) {
            $result = $this->modelo->validarUsuario($email, md5($password));

            if (is_array($result) && count($result) > 0) {
                return $result;
            } else
                return 1;
        } else {
            return 0;
        }
    }


    public function listarUsuarios()
    {
        return $this->modelo->getAllUsuarios();
    }

    public function buscarUsuario($id)
    {
        if (!empty($id) && $id != "" && $id != NULL) {
            $result = $this->modelo->getById($id);
            if (is_array($result) && count($result) > 0) {
                return $result;
            } else
                return 1;
        } else
            return 0;
    }

    public function registrar($id, $nombre, $email, $password, $id_cargo, $estado)
    {
        if (
            !empty($id) && $id != "" && $id != NULL &&
            !empty($nombre) && $nombre != "" && $nombre != NULL &&
            !empty($email) && $email != "" && $email != NULL &&
            !empty($password) && $password != "" && $password != NULL &&
            !empty($id_cargo) && $id_cargo != "" && $id_cargo != NULL&&
            !empty($estado) && $estado != "" && $estado != NULL 
            ) {
            $result = $this->modelo->getByEmail($email);
            if (is_array($result) && count($result) == 0) {
                $result = $this->modelo->insertar($id, $nombre, $email, md5($password), $id_cargo, $estado);
                if ($result)
                    return 3; // Usuario creado
                else
                    return 2; //Usuario no creado

            } else
                return 1; //Usuario ya existe con el mismo email
        } else
            return  0; //Falta Datos
    }

    public function modificar($id, $nombre, $email, $id_cargo, $estado)
    {
        if (
            !empty($id) && $id != "" && $id != NULL &&
            !empty($nombre) && $nombre != "" && $nombre != NULL &&
            !empty($email) && $email != "" && $email != NULL &&
            !empty($id_cargo) && $id_cargo != "" && $id_cargo != NULL &&
            !empty($estado) && $estado != "" && $estado != NULL
        ) {
            $result = $this->modelo->getById($id);
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->actualizar($id, $nombre, $email, $id_cargo, $estado);
                if ($result)
                    return 3; // Usuario actualizado
                else
                    return 2; //Usuario no actualizado

            } else
                return 1; //Usuario No existe con ese Id
        } else
            return  0; //Falta Datos
    }
    public function eliminar($id)
    {
        if (
            !empty($id) && $id != "" && $id != NULL 
             ) {
            $result = $this->modelo->getById($id);
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->eliminar($id);
                if ($result)
                    return 3; // Usuario eliminado
                else
                    return 2; //Usuario no lo elimino

            } else
                return 1; //Usuario No existe con ese Id
        } else
            return  0; //Falta Datos
    }
    public function actualizarPassword($id, $password)
    {
        if (
            !empty($id) && $id != "" && $id != NULL &&
            !empty($password) && $password != "" && $password != NULL 
             ) {
            $result = $this->modelo->getById($id);
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->actualizarPassword($id, md5($password));
                if ($result)
                    return 3; // Password actualizado
                else
                    return 2; //Password no actualizado

            } else
                return 1; //Usuario No existe con ese Id
        } else
            return  0; //Falta Datos
    }

    
   
    public function listarProducto()
    {
        return $this->modelo->getAllProductos();
    }

    public function buscarProductos($cod_producto)
    {
        if (!empty($cod_producto) && $cod_producto != "" && $cod_producto != NULL) {
            $result = $this->modelo->getBycodProducto($cod_producto);
            if (is_array($result) && count($result) > 0) {
                return $result;
            } else
                return 1;
        } else
            return 0;
    }

    public function registrarProducto($cod_producto, $nombreProducto, $stock, $valor_unitario, $estado)
    {
        if (
            !empty($cod_producto) && $cod_producto != "" && $cod_producto != NULL &&
            !empty($nombreProducto) && $nombreProducto != "" && $nombreProducto != NULL &&
            !empty($stock) && $stock != "" && $stock != NULL &&
            !empty($valor_unitario) && $valor_unitario != "" && $valor_unitario != NULL&&
            !empty($estado) && $estado != "" && $estado != NULL
        ) {
            $result = $this->modelo->getBycodProducto($cod_producto);
            if (is_array($result) && count($result) == 0) {
                $result = $this->modelo->insertarProducto($cod_producto, $nombreProducto, $stock, $valor_unitario, $estado);
                if ($result)
                    return 3; // Producto creado
                else
                    return 2; //Producto no creado

            } else
                return 1; //Producto ya existe con ese codigo
        } else
            return  0; //Falta Datos
    }
    public function modificarProducto($cod_producto, $nombreProducto, $stock, $valor_unitario, $estado)
    {
        if (
            !empty($cod_producto) && $cod_producto != "" && $cod_producto != NULL &&
            !empty($nombreProducto) && $nombreProducto != "" && $nombreProducto != NULL &&
            !empty($stock) && $stock != "" && $stock != NULL &&
            !empty($valor_unitario) && $valor_unitario != "" && $valor_unitario != NULL &&
            !empty($estado) && $estado != "" && $estado != NULL
            
        ) {
            $result = $this->modelo->getBycodProducto($cod_producto);
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->actualizarProducto($cod_producto, $nombreProducto, $stock, $valor_unitario, $estado);
                if ($result)
                    return 3; // Usuario actualizado
                else
                    return 2; //Usuario no actualizado

            } else
                return 1; //Usuario No existe con ese Id
        } else
            return  0; //Falta Datos
    }
    public function eliminarProducto($cod_producto)
    {
        if (
            !empty($cod_producto) && $cod_producto != "" && $cod_producto != NULL 
             ) {
            $result = $this->modelo->getBycodProducto($cod_producto);
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->eliminarProduct($cod_producto);
                if ($result)
                    return 3; // Usuario eliminado
                else
                    return 2; //Usuario no lo elimino

            } else
                return 1; //Usuario No existe con ese Id
        } else
            return  0; //Falta Datos
    }
    public function listarVenta()
    {
        return $this->modelo->getAllVentas();
    }

    public function buscarVentas($id_venta)
    {
        if (!empty($id_venta) && $id_venta != "" && $id_venta != NULL) {
            $result = $this->modelo->getByidVenta($id_venta);
            if (is_array($result) && count($result) > 0) {
                return $result;
            } else
                return 1;
        } else
            return 0;
    }
    public function registrarVenta($id_venta, $fecha, $idCliente, $cod_producto, $cantidad, $valor_unitario, $subtotal, $total)
    {
        if (
            !empty($id_venta) && $id_venta != "" && $id_venta != NULL &&
            !empty($fecha) && $fecha != "" && $fecha != NULL &&
            !empty($idCliente) && $idCliente != "" && $idCliente != NULL &&
            //!empty($nombre) && $nombre != "" && $nombre != NULL &&
            !empty($cod_producto) && $cod_producto != "" && $cod_producto != NULL &&
            //!empty($nombreProducto) && $nombreProducto!= "" && $nombreProducto != NULL &&
            //!empty($stock) && $stock != "" && $stock != NULL &&
            !empty($cantidad) && $cantidad != "" && $cantidad != NULL &&
            !empty($valor_unitario) && $valor_unitario != "" && $valor_unitario != NULL&&
            !empty($subtotal) && $subtotal != "" && $subtotal != NULL &&
            !empty($total) && $total != "" && $total != NULL 
        ) {
            $result = $this->modelo->getByidVenta($id_venta);
            if (is_array($result) && count($result) == 0) {
                $result = $this->modelo->insertarVenta($id_venta, $fecha, $idCliente, $cod_producto, $cantidad, $valor_unitario, $subtotal, $total);
                if ($result)
                    return 3; // Venta creada
                else
                    return 2; //Venta no creada

            } else
                return 1; //Venta ya existe con ese id
        } else
            return  0; //Falta Datos
    }
    public function modificarVenta($id_venta, $fecha, $idCliente, $cod_producto, $cantidad, $valor_unitario, $subtotal, $total)
    {
        if (
            !empty($id_venta) && $id_venta != "" && $id_venta != NULL &&
            !empty($fecha) && $fecha != "" && $fecha != NULL &&
            !empty($idCliente) && $idCliente != "" && $idCliente != NULL &&
            !empty($cod_producto) && $cod_producto != "" && $cod_producto != NULL &&
            !empty($cantidad) && $cantidad != "" && $cantidad != NULL &&
            !empty($valor_unitario) && $valor_unitario != "" && $valor_unitario != NULL&&
            !empty($subtotal) && $subtotal != "" && $subtotal != NULL&&
            !empty($total) && $total != "" && $total != NULL
            
        ) {
            $result = $this->modelo->getByidVenta($id_venta);
            if (is_array($result) && count($result) > 0) {
                $result = $this->modelo->actualizarVenta($id_venta, $fecha, $idCliente, $cod_producto, $cantidad, $valor_unitario, $subtotal, $total);
                if ($result)
                    return 3; // Venta actualizado
                else
                    return 2; //Venta no actualizado

            } else
                return 1; //Venta No existe con ese Id
        } else
            return  0; //Falta Datos
}
public function listarDetalles()
{
    return $this->modelo->getAllDetalles();
}

public function buscarDetalles($num_factura)
{
    if (!empty($num_factura) && $num_factura != "" && $num_factura != NULL) {
        $result = $this->modelo->getByidDetalles($num_factura);
        if (is_array($result) && count($result) > 0) {
            return $result;
        } else
            return 1;
    } else
        return 0;
}
public function registrarDetalles($id_venta, $cod_producto, $cantidad, $valor_unitario, $total)
{
    if (
        //!empty($nombre) && $nombre != "" && $nombre != NULL &&
        !empty($id_venta) && $id_venta != "" && $id_venta != NULL &&
        !empty($cod_producto) && $cod_producto != "" && $cod_producto != NULL &&
        //!empty($nombreProducto) && $nombreProducto!= "" && $nombreProducto != NULL &&
        //!empty($stock) && $stock != "" && $stock != NULL &&
        !empty($cantidad) && $cantidad != "" && $cantidad != NULL &&
        !empty($valor_unitario) && $valor_unitario != "" && $valor_unitario != NULL&&
        !empty($total) && $total != "" && $total != NULL 
    ) {
        $result = $this->modelo->getByidDetalles($id_venta);
        if (is_array($result) && count($result) == 0) {
            $result = $this->modelo->insertarDetalles($id_venta, $cod_producto, $cantidad, $valor_unitario, $total);
            if ($result)
                return 3; // Venta creada
            else
                return 2; //Venta no creada

        } else
            return 1; //Venta ya existe con ese id
    } else
        return  0; //Falta Datos
}
}