<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PIEZAS</title>
        <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
        <table style='border:1px solid black'>
            <thead>
                <tr>
                    <th>IdRecambio</th>
                    <th>Descripción</th>
                    <th>UnidadBase</th>
                    <th>Stock</th>
                    <th>PrecioReferencia</th>
            </thead>
            <?php
            $connection = new mysqli("localhost", "tf", "12345", "tf");

            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                exit();
            }  
            $p= $_GET['id'];
            //consulta a la tabla recambios, haciendo un join a incluyen
            if ($result = $connection->query("SELECT r.* FROM recambios r 
            join incluyen i
            on r.IdRecambio=i.IdRecambio
            where i.IdReparacion = $p;")) {
                //Bucle para rellenar el ontenido de la tabla
                while($obj = $result->fetch_object()) {
                    echo "<tr>";
                    echo "<td>".$obj->IdRecambio."</td>";
                    echo "<td>".$obj->Descripcion."</td>";
                    echo "<td>".$obj->UnidadBase."</td>";
                    echo "<td>".$obj->Stock."</td>";
                    echo "<td>".$obj->PrecioReferencia."</td>";
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
        </html>