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
                            <h1>Formas de Pago</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="web/cmdDefaultHomeC">Home </li></a>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
 <style>
.barra {
    background-color:  #ecf0f1; /* Color de fondo de la barra de navegación */
    padding: 10px;
}

.menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
    margin-bottom: 15px;
}

nav li {
    display: inline;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: #333; /* Color del enlace en la barra de navegación */
}

main {
    background-color: #fff; /* Color de fondo del contenido principal */
    padding: 20px;
}
section {
    margin-bottom: 40px;
}
.text {
    margin-bottom: 60px;
}
.text1 {
    margin-bottom: 60px;
}

footer {
    background-color: #3498db; /* Color de fondo del pie de página */
    color: #fff; /* Color de texto en el pie de página */
    text-align: center;
    padding: 10px;
}
.container {
            display: flex; /* Hace que los elementos hijos se alineen en línea */
            justify-content: space-between; /* Espacio entre los elementos */
            align-items: center; /* Centra verticalmente los elementos */
        }
.image {
            max-width: 80%; /* Limita el ancho máximo de las imágenes */
        }
 .image-container {
            margin-right: 350px; /* Puedes ajustar el valor según tus necesidades */
            margin-bottom: 40px;
        }
            </style>
            <nav class="barra">
        <ul class="menu">
            <li><a href="web/cmdDefaultHomeC">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <!-- <li><a href="#">Servicios</a></li> -->
            <li><a href="web/cmdContacto">Contacto</a></li>
        </ul>
    </nav>
    <main>
        <p class="text">¡Estimado cliente le brindamos este servicio en nuestra plataforma para que pueda elegir el metodo de pago, en el cual desea cancelar la compra!</p>
        <h2 class="text1">Medios de Pago</h2>
        <div class="container">
        <div class="image-container">
            <img src="./../../../miApi/public/images/nequi.jpg" alt="Imagen 1" class="image">
            <p>31476598712</p>
        </div>
        <div class="image-container">
            <img src="../../../../miApi/public/images/banc.png" alt="Imagen 2" width="350" height="80" class="image">
            <h5>Bancolombia</h5>
            <p>32036781264</p>
        </div>
        <div class="image-container">
            <img src="../../../../miApi/public/images/davip.png" alt="Imagen 2" width="200" class="image">
            <p>31302581538</p>
        </div>
    </div>
        
        
           <!-- <h2>Servicios</h2>
            <ul>
                <li>Servicio 1</li>
                <li>Servicio 2</li>
                <li>Servicio 3</li>
            </ul>-->
    </main>
            <!-- Main content -->
            
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