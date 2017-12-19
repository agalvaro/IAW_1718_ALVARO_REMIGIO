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
          echo "No tengo las horas";
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

        $hora = $_GET['hor'];

        $query = "SELECT Nombre,Apellidos,Matricula,FechaEntrada,Averia
                  FROM empleados i NATURAL JOIN intervienen i NATURAL JOIN reparaciones r
                  WHERE Horas = $hora";

        if ($result= $connection->query($query)) {

            if ($result->num_rows==0) {
              echo "No hay empleado con ese codigo";
           } else {
             $obj = $result->fetch_object();
            echo "Horas del empleado: ".$obj->Nombre." ".$obj->Apellidos."<br><br>";
            echo "Reparacion: ".$obj->Matricula." ".$obj->FechaEntrada." ".$obj->Averia."<br><br>";
           }
       } else {
         "No se ha podido recuperar los datos del empleado";
       }

      ?>

    </body>
</html>
