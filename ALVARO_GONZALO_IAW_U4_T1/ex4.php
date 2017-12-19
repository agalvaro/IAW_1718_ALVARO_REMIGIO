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
      $i = 1;
      while ($i<10) {
        echo "abc ";
        $i++;
      }
      echo "<br>";
      echo "<br>";

      $i = 1;
      do {
        echo "xyz ";
        $i++;
      } while ($i<10);
      echo "<br>";
      echo "<br>";

      for ($i=1;$i<10;$i++) {
        echo $i;
        echo " ";
      }
      echo "<br>";
      echo "<br>";

      echo "<ol>";
      for ($x='A';$x<'G';$x++){
      echo "<li>Item $x</li>";
      }
      echo "</ol>";
      ?>
    </body>
</html>
