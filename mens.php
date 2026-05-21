<?php
  include "stoel.php";

  $rodeStoel = new Stoel("rood", 60, 70);
    echo $rodeStoel ->echoKleur();
  echo $rodeStoel->echoZithoogte(); 
  echo $rodeStoel->verstelZithoogte();

?>
