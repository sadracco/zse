<?php
use PHPUnit\Framework\TestCase;

require_once(dirname(__FILE__).'/../src/Label.php');

class LabelTest extends TestCase{
	public function testDisplay(){
        $obj1 = new Label($content => 'Etykieta 1', $id => '', $desc => 'abc');
        // $obj2 = new Label($content: 'Etykieta 1', $id: 'inpId', $desc: 'abc');

        // $this->assertInstanceOf(Label::class, $obj1);
        // $this->assertInstanceOf(Label::class, $obj2);

        // $this->assertEquals(false, $obj1->getFor());
        // $this->assertEquals('for="inpId"', $obj2->getFor());

        // $this->assertIsBool($obj1->hasFor());
        // $this->assertIsBool($obj2->hasFor());

        // $this->assertEquals('Etykieta 1', $obj1->getContent());
        // $this->assertEquals('Etykieta 1', $obj2->getContent());

        // $this->assertEquals('abc', $obj1->getDesc());
        // $this->assertEquals('abc', $obj2->getDesc());

        // $this->assertIsBool($obj1->hasDesc());
        // $this->assertIsBool($obj2->hasDesc());

        // $this->assertEquals('<label>Etykieta 1</label>', $obj1->display());
        // $this->assertEquals('<label for="inpId">Etykieta 1</label>', $obj2->display());
	}
}
