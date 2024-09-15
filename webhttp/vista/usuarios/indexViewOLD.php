<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>

<body>

   <h3>Listado de usuarios</h3>

   <table border="1">
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Password</th>
        <th>Estado</th>
    </thead>
    <tbody>
   <?php

   foreach($d->data as $usuario) {

   print_r("<tr>");
   printf("<td>$usuario->id</td>");
   printf("<td>$usuario->nombre</td>");
   printf("<td>$usuario->email</td>");
   printf("<td>$usuario->password</td>");
   printf("<td>$usuario->estado</td>");
   print_r("</tr>");
   }
   ?>
   </tbody>
   </table>
</body>


</html>

