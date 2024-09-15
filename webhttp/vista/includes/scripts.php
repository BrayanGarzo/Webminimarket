   <!-- jQuery -->
   <script src="<?php echo URL; ?>public/plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="<?php echo URL; ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- SweetAlert2 -->
   <script src="<?php echo URL; ?>public/plugins/sweetalert2/sweetalert2.min.js"></script>
   <!-- DataTables  & Plugins -->
   <script src="<?php echo URL; ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="<?php echo URL; ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="<?php echo URL; ?>public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
   <script src="<?php echo URL; ?>public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
   <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
   <script src="<?php echo URL; ?>public/plugins/jszip/jszip.min.js"></script>
   <script src="<?php echo URL; ?>public/plugins/pdfmake/pdfmake.min.js"></script>
   <script src="<?php echo URL; ?>public/plugins/pdfmake/vfs_fonts.js"></script>
   <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
   <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
   <script src="<?php echo URL; ?>public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
   <!-- AdminLTE App -->
   <script src="public/dist/js/adminlte.min.js"></script>
   <!-- AdminLTE for demo purposes -->
   <!--
    <script src="<?php echo URL; ?>public/plugins/dist/js/demo.js"></script>
    -->
   <script>
       //Implmenta el mensaje en la parte superior derecha
       //cada vez que se ejecuta una accion
       $(function() {
           var Toast = Swal.mixin({
               toast: true,
               position: 'top-end',
               showConfirmButton: false,
               timer: 3000
           });
           //Se valida que el atributo mensaje venga lleno para mostar el mensaje
           <?php if (isset($d) && $d->message != "") : ?>
               Toast.fire({
                   icon: '<?php echo ($d->result == "success") ? "success" : "warning"; ?>',
                   title: '<?php echo $d->message; ?>'
               })
           <?php endif ?>
       });
   </script>
   <script>
       function calcularPrecio(e) {
           e.preventDefault();
           const cant = document.getElementById("cantidad").value;
           const precio = document.getElementById("valor_unitario").value;
           document.getElementById("subtotal").value = precio * cant;
       }
       function calcularTotal(e) {
           e.preventDefault();
           const subt = document.getElementById("subtotal").value;
           const sub = document.getElementById("subtotal").value;
           document.getElementById("total").value = subt + sub;
       }
       // Obtén referencias a los elementos del formulario
  const cantidadInput = document.getElementById("cantidad");
  const stockInput = document.getElementById("stock");

  // Escucha el evento de cambio en el campo de cantidad
  cantidadInput.addEventListener("change", function () {
    // Obtiene los valores actuales de cantidad y stock
    const cantidad = parseInt(cantidadInput.value);
    const stock = parseInt(stockInput.value);

    // Verifica si la cantidad es menor o igual al stock
    if (cantidad <= stock) {
      // Actualiza el valor del campo de stock restando la cantidad vendida
      stockInput.value = stock - cantidad;
    } else {
      // Si la cantidad es mayor que el stock, muestra un mensaje de error
      alert("No hay suficiente stock disponible.");
      cantidadInput.value = ""; // Borra el valor de cantidad
    }
  });
   </script>