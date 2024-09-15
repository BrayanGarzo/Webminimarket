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
                            <h1>Gestion de Usarios</h1>
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

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Crear Usuario</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="web/cmdCrearUsuario" method="POST">
                        <div class="card-body">

                        <div class="form-group">
                                <label for="nombre">Id</label>
                                <input type="text" class="form-control" value="" name="id" id="id" placeholder="Id">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" value="" name="nombre" id="nombre" placeholder="Ingrese Nombre">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="" name="email" id="email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" value="" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="id_cargo">id_cargo</label>
                                <input type="text" class="form-control" value="" name="id_cargo" id="id_cargo" placeholder="Id_cargo">
                            </div>
                           <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" value="" name="estado" id="estado" placeholder="Estado">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="web/cmdConsultarUsuarios"><button class=" btn btn-primary">Cancelar</button></a>
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