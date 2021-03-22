<?php
class Label{
  private $for;
  private $content;
  private $hasCtrl;
  private $desc;

  public function __construct($content='', $id='', $desc=''){
    $this->for = $id;
    $this->content = $content;
    $this->desc = $desc;
  }

  public function setFor($value){ $this->for = $value; }
  public function setContent($value){ $this->content = $value; }
  public function setDesc($value){ $this->desc = $value; }

  public function getFor(){ return 'for="'.$this->for.'"'; }
  public function getContent(){ return $this->content; }
  public function getDesc(){ return $this->desc; }
  
  public function hasFor(){ return isset($this->for); }
  public function hasDesc(){ return isset($this->desc); }

  public function display(){
    $res = '<label ';
    $res += $this->getFor();
    $res += '>';
    $res += $this->getContent();
    $res += '</label>';
    return $res;
  }
}
?>