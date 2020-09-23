<?php


  class Square {

    public $lato;

    public function __construct($lato){

      $this -> lato = $lato;



    }

    public function __toString(){

      return $this -> lato = $lato * $this -> lato = $lato;
    }
  }

  $square1 = new Square(5);
  echo $square1;




?>
