<?php
require_once 'Element.php';

class Paragraph extends Element{
    private $text;

    public function _construct($text){
        $this->text = $text;
    }
    public function render(){
        echo "<p>$this->text</p>";
    }
}