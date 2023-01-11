<?php
require_once __DIR__ . "/product.php";
class Kennel extends Product{
  private $size;
  private $material;
  
  public function setSize($size){
    $this-> size = $size;
  }

  public function getSize(){
    return $this->size;
  }
  
  public function setMaterial($material){
    $this-> material = $material;
  }

  public function getMaterial(){
    return $this->material;
  }
}

?>