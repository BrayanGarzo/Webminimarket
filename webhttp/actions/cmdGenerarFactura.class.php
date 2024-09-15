<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        #container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Formulario de Factura</h1>
        <form action="procesar_factura.php" method="post">
            <h2>Información del Cliente</h2>
            <label for="nombre_cliente">Nombre del Cliente:</label>
            <input type="text" id="nombre_cliente" name="nombre_cliente" required>

            <label for="direccion_cliente">Dirección del Cliente:</label>
            <input type="text" id="direccion_cliente" name="direccion_cliente">

            <h2>Detalles de la Factura</h2>
            <label for="numero_factura">Número de Factura:</label>
            <input type="text" id="numero_factura" name="numero_factura" required>

            <label for="fecha_factura">Fecha de Factura:</label>
            <input type="date" id="fecha_factura" name="fecha_factura" required>

            <table>
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="descripcion[]"></td>
                        <td><input type="number" name="cantidad[]"></td>
                        <td><input type="number" name="precio_unitario[]"></td>
                        <td><input type="number" name="total[]"></td>
                    </tr>
                    <!-- Puedes agregar más filas para más elementos de la factura aquí -->
                </tbody>
            </table>

            <button type="button" id="agregar_fila">Agregar Item</button>

            <br><br>
            <input type="submit" value="Generar Factura">
        </form>
    </div>

    <script>
        document.getElementById('agregar_fila').addEventListener('click', function () {
            var tbody = document.querySelector('tbody');
            var newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td><input type="text" name="descripcion[]"></td>
                <td><input type="number" name="cantidad[]"></td>
                <td><input type="number" name="precio_unitario[]"></td>
                <td><input type="number" name="total[]"></td>
            `;
            tbody.appendChild(newRow);
        });
    </script>
</body>
</html>




