<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ASIGNAR</title>
    </head>
    <body>
        <table style='border:1px solid black'>
            <thead>
                <tr>
                    <th>CodEmpleado</th>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>CP</th>
                    <th>FechaAlta</th>
                    <th>Categoría</th>
                    <th>Asignar</th>
            </thead>
            <?php

            $connection = new mysqli("localhost", "tf", "12345", "tf");

            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                exit();
            }
            //convierte el id en una variable
            $a= $_GET['id'];

            echo "La reparacion seleccionada tiene el ID $a.<br><br>";

            if ($result = $connection->query("SELECT * FROM EMPLEADOS;")) {
                while($obj = $result->fetch_object()) {
                    //Bucle para rellenar la tabla con los datos de la consulta
                    echo "<tr>";
                    echo "<td>".$obj->CodEmpleado."</td>";
                    echo "<td>".$obj->DNI."</td>";
                    echo "<td>".$obj->Nombre."</td>";
                    echo "<td>".$obj->Apellidos."</td>";
                    echo "<td>".$obj->Telefono."</td>";
                    echo "<td>".$obj->CP."</td>";
                    echo "<td>".$obj->FechaAlta."</td>";
                    echo "<td>".$obj->Categoria."</td>";
                    //Un checkbox para elegir empleados
                    echo "<td><input type='checkbox' name='Asignar[]' value=".$obj->CodEmpleado."></td>";
                    echo "</tr>";
                }
                //Cerrar resultado.
                $result->close();
                unset($obj);

                //enviar los parámetros
                echo "</table><br><input type='submit' name='enviar' value='Asignar' required/>";

            } else {
                mysqli_error($connection);
            }
            //Al pulsar asignar ocurre lo siguiente
            if (isset($_POST['enviar'])) {
                echo "<br>Empleado/s ";
                //Se coge el valor y se convierte en otra variable
                foreach ($_POST['Asignar'] as $key => $b) {
                    $connection->query("INSERT INTO intervienen VALUES ($b,$a,'0');");
                }
                echo "Asignado a la reparación Nº $a";
            }
            ?>
            <a href="reparaciones.php"><input type='submit' value='Volver'/></a>
            </body>
        </html>