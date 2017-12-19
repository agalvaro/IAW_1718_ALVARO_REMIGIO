<?php
function numveces($v,$car) {
  $c=0;
  for ($i=0; $i <sizeof($v) ; $i++) {
    if ($v[$i]==$car) {
      $c++;
    }
  }

  return $c;

  }
  ?>
