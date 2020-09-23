<?php


  class Square {

    public $lato;

    function __construct($lato){

      $this -> lato = $lato;



    }

    public function getArea(){

      return $this -> lato  * $this -> lato;

    }

    public function getPeri(){
      return 4 * $this -> lato;
    }

    public function __toString(){
      return "Area del quadrato: ". $this -> getArea() . "<br>".
             "Perimetro del quadrato: " . $this -> getPeri() . "<br>";

    }
  }

  $square1 = new Square(5);
  echo $square1;

  




?>
