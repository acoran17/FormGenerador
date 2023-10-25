<?php
class Field{
    private $name;
    private $type;
    private $text;
    private $default;
    private $id;

    public function _construct($name, $type){
        $this->name = $name;
        $this->type = $type;
    }

    abstract public function render();
}