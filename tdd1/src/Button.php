<?php
class Button{
  private $type;
  private $label;
  private $action;
  private $image;

  public function __construct($type, $label, $action, $image){
    $this->type = $type;
    $this->label = $label;
    $this->action = $action;
    $this->image = $image;
  }

  public function setLabel($value){ $this->label = $value; }

  public function getLabel(){ return $this->label; }
  public function getAction(){ return 'formaction="'.$this->action.'"'; }

  public function display(){
    $res = '<button ';
    $res += $this->getAction();
    $res += '>';
    $res += $this->getLabel();
    $res += '</button>';
    return $res;
  }
}
?>