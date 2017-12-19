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

      $elementos = ["nombre" => "text", "fecha_de_nacimiento" => "date", "edad" => "number"];
      $text = "Enviar";

      function crear_formulario($elementos, $texto) {

        $num=0;

        foreach ($elementos as $k => $v) {
          echo "Elemento $k---->".$v."<br> ";
        }
      }

       ?>

    </body>
</html>
