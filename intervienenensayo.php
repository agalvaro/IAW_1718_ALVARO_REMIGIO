<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <script type="text/javascript" src=" "></script>

      <?php

        if (empty($_GET)) {
          echo "No tengo de la reparación";
          exit();
        }

        //CREATING THE CONNECTION
        $connection = new mysqli("localhost", "root", "Admin2015", "tf",3316);
        $connection->set_charset("uft8");

        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $codigo = $_GET['cod'];

        $query = "SELECT Nombre,Apellidos
                  FROM empleados
                  WHERE CodEmpleado = $codigo";

        if ($result= $connection->query($query)) {

            if ($result->num_rows==0) {
              echo "No hay empleado con ese codigo";
           } else {
             $obj = $result->fetch_object();
            echo "Intervenciones de: ".$obj->Nombre." ".$obj->Apellidos."<br><br>";
           }
       } else {
         "No se ha podido recuperar los datos del empleado";
       }

       $query= "SELECT r.Matricula,Averia,FechaEntrada,Horas
               FROM reparaciones r NATURAL JOIN intervienen i
               NATURAL JOIN empleados e
               WHERE e.CodEmpleado=$codigo";

       if($result = $connection->query($query)) {

          echo "<table>";
          echo "<tr><th>Matricula</th>
                <th>Averia</th>
               <th>FechaEntrada</th>
               <th>Horas</th></tr>";

          while ($obj = $result->fetch_object()) {
                echo "<tr>";
                echo "<td>".$obj->Matricula."</td>";
                echo "<td>".$obj->Averia."</td>";
                echo "<td>".$obj->FechaEntrada."</td>";
                echo "<td><a href='modificar_horas.php?hor=".$obj->Horas.
                "'>".$obj->Horas."</a></td>";
                echo "</tr>";
                }

            echo "</table>";

       } else {
         "EL EMPLEADO NO HA INTERVENIDO EN NINGUNA REPARACION";
       }
      ?>

    </body>
</html>
