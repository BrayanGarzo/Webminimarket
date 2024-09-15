<!DOCTYPE html>
<html lang="en">

<?php require_once INCLUDES_TEMPLATE . "header.php"; ?> </php>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php require_once INCLUDES_TEMPLATE . "navbar.php"; ?> </php>
        <!-- /.navbar -->
        <?php require_once INCLUDES_TEMPLATE . "aside.php"; ?> </php>

<!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Informacion de Contacto</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href=""> </li></a>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <style>
  body {
    font-family: Arial, sans-serif;
    /*background-color: #ccc;*/
    margin: 0;
    padding: 0;
}

.contacto {
    /*background-color: #FDEBD0;*/
    max-width: 400px;
    margin: 70px auto;
    padding: 40px;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    margin-bottom: 8px;
}

strong {
    font-weight: bold;
}
.contenedor {
    text-align: right;  /*Alinea el contenido a la derecha */
  }
    </style>
            <div class="contacto">
        <p><strong>Nombre:</strong> Brayan Garzon</p>
        <p><strong>Correo Electrónico:</strong>brayangarzonp2019@gmail.com</p>
        <p><strong>Teléfono:</strong> 3145441328</p>
        <p><strong>Dirección:</strong> Calle Principal #123, Ciudad</p>
        <p>Lo más importante para nosotros es tu satisfacción. Contáctanos para cualquier inquietud al</p>
        <a href="https://wa.me/573145441328">WhatsApp<i class="nav-icon fas fa-comments"></i></a> 
        <div class="contenedor">
    <a href="web/cmdDefaultHome" class="btn btn-primary" >Ir a Inicio</a>
</div>
    </div>

    
         <!-- Importo el footer -->
         <?php require_once INCLUDES_TEMPLATE . "footer.php"; ?> </php>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- Main Sidebar Container -->

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