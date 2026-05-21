<?php

  class Stoel {

    // Fields (eigenschappen)
    private int $zithoogte;
    private string $kleur;
    private int $verstelhoogte;

    // Constructor (start van blauwdruk)
    public function __construct($ingevoerdeKleur, $ingevoerdeZithoogte,
    $ingevoerdeVerstelhoogte)
    {
      $this->kleur = $ingevoerdeKleur;
      $this->zithoogte = $ingevoerdeZithoogte;
      $this->verstelhoogte = $ingevoerdeVerstelhoogte;
    }

    // Functions (handelingen)
    public function echoKleur(){
      echo " De stoel is: " .$this->kleur . "\n" ;
    }
  
    public function echoZithoogte() {
      echo " Zithoogte " . $this->kleur . " stoel: " .$this->zithoogte. "\n";
    }

    public function verstelZithoogte(){
      echo " Zithoogte na verstelling: " .$this->verstelhoogte . "\n";
    }

  }

?>