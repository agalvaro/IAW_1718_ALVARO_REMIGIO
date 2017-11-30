<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <?php
        $v2=[48,32,10,14,15];
        $num2=$v2[0];

        for ($i=0; $i <sizeof($v2) ; $i++) {
          if ($num2>$v2[$i]) {
            $num2=$v2[$i];
          }
        }
        echo "El numero menor es $num2";
      ?>
      <script type="text/javascript" src=" "></script>
    </body>
</html>
