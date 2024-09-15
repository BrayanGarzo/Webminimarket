<!DOCTYPE html>
<html lang="en">
<?php require_once INCLUDES_TEMPLATE . "header.php" ; ?></php>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php require_once INCLUDES_TEMPLATE . "navbar.php" ; ?></php>
<!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <?php require_once INCLUDES_TEMPLATE . "aside.php" ; ?></php>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
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
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <header>
        <center><h1>BIENVENIDO</h1></center>
        <h4>SIP ( Sistema Integrado de Presupuesto)</h4>
        <center><img src="public/images/mini.png" alt="" height="600" width="1200"></center>
           
        </header>
    
        <section>
            <article>
                <p>Aquí como usuario de nuestra plataforma, puede administrar o realizar cada una de las funciones como; Gestion de usuarios,  Gestion de productos, registar una venta, informe de ganancia, crear un reporte y generar una factura</p>
            </article>
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

  <?php require_once INCLUDES_TEMPLATE . "footer.php" ; ?></php>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php require_once INCLUDES_TEMPLATE . "scripts.php" ; ?></php>
</body>
</html>