<!DOCTYPE html>
<html lang="en">

<title>Recup-Contra</title> 
   <!--<?php require_once INCLUDES_TEMPLATE . "header.php"; ?> --> </php>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Gestion de contraseñas</h1>
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
                        <h3 class="card-title">Recuperar Contraseña</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="web/cmdActualizarPassword" method="POST">
                        <div class="card-body">

                        <div class="form-group">
                                <label for="nombre">Id_usuario</label>
                                <input type="text" class="form-control" value="" name="id" id="id" placeholder="Id">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" value="" name="password" id="password" placeholder="Nueva Contraseña">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
                            <a href=": ../../web/cmdDefaultLogin" class="btn btn-primary">Iniciar sesion </a>
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