<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EMPLEADOS</title>
        <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
        <table style='border:1px solid black'>
            <thead>
                <tr>
                    <th>CodEmpleado</th>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>CP</th>
                    <th>FechaAlta</th>
                    <th>Categoria</th>
            </thead>
            <?php
            $connection = new mysqli("localhost", "root", "Admin2015", "tf",3316);

            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                exit();
            }
            $c= $_GET['id'];
            //consulta a la tabla empleados, haciendo un join a reparaciones
            if ($result = $connection->query("SELECT e.*
       FROM empleados e join intervienen i
       on e.CodEmpleado=i.CodEmpleado
       where i.IdReparacion = $c;")) {
                //Bucle para rellenar el contenido de la tabla
                while($obj = $result->fetch_object()) {
                    echo "<tr>";
                    echo "<td>".$obj->CodEmpleado."</td>";
                    echo "<td>".$obj->DNI."</td>";
                    echo "<td>".$obj->Nombre."</td>";
                    echo "<td>".$obj->Apellidos."</td>";
                    echo "<td>".$obj->Direccion."</td>";
                    echo "<td>".$obj->Telefono."</td>";
                    echo "<td>".$obj->CP."</td>";
                    echo "<td>".$obj->FechaAlta."</td>";
                    echo "<td>".$obj->Categoria."</td>";
                    echo "</tr>";
                }
                //cerrar la tabla result
                $result->close();
                unset($obj);
                echo "</table>";
            } else {
                mysqli_error($connection);
            }
            ?>
            <a href="reparaciones.php"><input type='submit' value='Volver' /></a>
            </body>
    </body>
</html>
