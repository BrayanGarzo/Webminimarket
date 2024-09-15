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
                            <h1>Gestion de Productos</h1>
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
                        <h3 class="card-title">Editar Producto</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="web/cmdActualizarProducto" method="POST">
                        <div class="card-body">

                             <div class="form-group">
                                <label for="cod_producto">Cod_producto</label>
                                <input type="text" class="form-control" readonly="false" value="<?php print_r($d->data[0]->cod_producto); ?>" name="cod_producto" id="cod_producto" placeholder="Ingrese Codigo">
                            </div>
                            <div class="form-group">
                                <label for="nombreProducto">Nombre_producto</label>
                                <input type="text" class="form-control" value="<?php print_r($d->data[0]->nombreProducto); ?>" name="nombreProducto" id="nombreProducto" placeholder="Ingrese Nombre producto">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="stock" class="form-control" value="<?php print_r($d->data[0]->stock); ?>" name="stock" id="stock" placeholder="stock">
                            </div>
                            <div class="form-group">
                                <label for="valor_unitario">Valor_unitario</label>
                                <input type="valor_unitario" class="form-control" value="<?php print_r($d->data[0]->valor_unitario); ?>" name="valor_unitario" id="valor_unitario" placeholder="Valor_unitario">
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="estado" class="form-control" value="<?php print_r($d->data[0]->estado); ?>" name="estado" id="estado" placeholder="Estado">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
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