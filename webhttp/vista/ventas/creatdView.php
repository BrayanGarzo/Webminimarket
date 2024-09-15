<!DOCTYPE html>
<html lang="en">

<?php require_once INCLUDES_TEMPLATE . "header.php"; ?> </php>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once INCLUDES_TEMPLATE . "navbar.php"; ?> </php>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once INCLUDES_TEMPLATE . "aside.php"; ?> </php>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Gestion de ventas</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registrar Venta</h3>
                    </div>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    padding: 20px;
}

#registro-ventas-form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.input-group {
    margin-bottom: 15px;
}

.label {
    font-weight: bold;
}

input[type="text"],
input[type="number"],
input[type="date"],
input[type="time"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 3px;
    font-weight: bold;
}

button:hover {
    background-color: #0056b3;
}

   </style>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="web/cmdAñadirProducto" method="POST">
                        <div class="card-body">

                        <div class="form-group">
                            <label for="cod_producto">Cod_producto</label>
                                <input type="text" class="form-control" value="" name="cod_producto" id="cod_producto" placeholder="Codigo">
                            </div>
                        <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input type="cantidad" class="form-control" value="" name="cantidad" id="cantidad" placeholder="cantidad" onkeyup=calcularPrecio(event)>
                            </div>
                      <div class="form-group">
                                <label for="valor_unitario">Precio</label>
                                <input type="valor_unitario" class="form-control" value="" name="valor_unitario" id="valor_unitario" placeholder="Valor_unitario" onkeyup=calcularPrecio(event)>
                            </div>
                        <div class="form-group">
                                <label for="total">Total</label>
                                <input type="total" class="form-control" value="" name="total" id="total" placeholder="total" readonly>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="web/cmdConsultarVentas"><button class=" btn btn-primary">Cancelar</button></a>
                        </div>
                    </form>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Importo el footer -->
        <?php require_once INCLUDES_TEMPLATE . "footer.php"; ?> </php>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php require_once INCLUDES_TEMPLATE . "scripts.php"; ?> </php>

</body>

</html>