<?php
  include "stoel.php";

  $rodeStoel = new Stoel("rood", 60, 90);
  echo $rodeStoel->echoZithoogte(); 
  echo $rodeStoel->verstelZithoogte();
  echo $rodeStoel ->echoKleur();
?>
