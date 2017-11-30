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
          $var=["A","B","C","D"];
          for ($i=0; $i < sizeof($var); $i++) {
            $var=$var[$i];
            echo "<ol>";
            echo "<ul>$var</ul>";
          }
       ?>
    </body>
</html>
