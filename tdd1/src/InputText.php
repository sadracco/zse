<?php
class InputText{
  private $for;
  private $type;
  private $types;

  public function __construct($type, $types, $for){
    $this->for = $for;
    $this->type = $type;
    $this->types = $types;
  }

  public function setFor($value){ $this->for = $value; }

  public function getFor(){ return 'id="'.$this->for.'"'; }

  public function hasFor(){ return isset($this->for); }

  public function display(){
    $res = '<input type="text" ';
    $res += $this->getFor();
    $res += '>';
    return $res;
  }
}
?>