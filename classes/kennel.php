<?php
 class Kennel{
  public $name;
  public $categories;
  public $price;
  public $size;

  public function __construct(string $_name , array $_category , int $_price){
    $this -> name = $_name;
    $this -> categories = $_category;
    $this -> price = $_price;
  }
  public function getInfo(){
    return "Dimensioni: {$this->size} ";
  }
}

?>