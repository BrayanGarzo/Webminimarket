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
                            <h1>Gestion de Ventas</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="web/cmdDefaultHome">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <style>
                .contenedor
                {
                  background-color: #D0FDFB;
                }
            </style>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">
                            <a href="web/cmdDefaultCrearVenta" class="btn btn-primary " >Registrar venta</a>
                            
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <?php echo $d->message; ?>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="contenedor">
                                <th>Acciones</th>
                                <th>Id.venta</th>
                                <th>Num_factura</th>
                                <th>Fecha</th>
                                <th>Id Cliente</th>
                                <th>Nombre Cliente</th>
                                <th>Informacion</th>
                                <!--<th>Cod_producto</th>
                                <th>Descripcion</th>
                                <th>Stock</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total</th> -->
                            </thead>
                            <tbody>
                                <?php


                                foreach ($d->data as $venta) {
                                    print_r("<tr>");
                                    print_r("<td>
                                              <a href='web/cmdDefaultEditarVenta/" . $venta->id_venta . "'><i class='nav-icon fas fa-edit'></i></a>
                                              <a href='web/cmdEliminarProducto/" . $venta->id . "'><i class='nav-icon fas fa-trash'></i></a>
                                            </td>");
                                    print_r("<td>$venta->id_venta</td>");
                                    print_r("<td>$venta->num_factura</td>");
                                    print_r("<td>$venta->fecha</td>");
                                    print_r("<td>$venta->idCliente</td>");
                                    print_r("<td>$venta->nombre</td>");
                                    //print_r("<td>$venta->informacion</td>"); 
                                    print_r("<td>
                                    <a class='mr-2' href='web/cmdConsultarDetalles/" . $venta->num_factura . "'/>Ver detalles...</a>
                                    </td>");
                                    print_r("</tr>");
                                    //print_r("<td>$venta->cod_producto</td>");
                                    //print_r("<td>$venta->nombreProducto</td>");
                                    //print_r("<td>$venta->stock</td>");
                                    //print_r("<td>$venta->cantidad</td>");
                                    //print_r("<td>$venta->valor_unitario</td>");
                                    //print_r("<td>$venta->total</td>");
                                    //print_r("</tr>");
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

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
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>