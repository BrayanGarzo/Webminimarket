<!DOCTYPE html>
<html lang="en">
<title>REGISTRO</title> 
<?php require_once INCLUDES_TEMPLATE . "header.php"; ?> </php>


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
                            <h1>Registro de Usuarios</h1>
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
                        <h3 class="card-title">Formulario de registro</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form action="web/cmdRegisterUsuario" method="POST">
                        <div class="card-body">

                        <div class="form-group">
                                <label for="nombre">Id</label>
                                <input type="text" class="form-control" value="" name="id" id="id" placeholder="Id" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" value="" name="nombre" id="nombre" placeholder="Ingrese Nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="" name="email" id="email" placeholder="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" value="" name="password" id="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="id_cargo">id_cargo</label>
                                <input type="text" class="form-control" value="" name="id_cargo" id="id_cargo" placeholder="Id_cargo" required>
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" value="" name="estado" id="estado" placeholder="Estado" required>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                        <p class="card-footer">
                            <button type="submit" class="btn btn-primary">Registrarse</button> 
                         ¿Ya tienes una cuenta? <a href=": ../../web/cmdDefaultLogin" class="btn btn-primary">Iniciar sesion </a>
      </p>
                        </div>
                    </form>
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Importo el footer -->
        
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
  

</body>

</html>