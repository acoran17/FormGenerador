<?php

abstract class Field{
    protected $name;
    protected $type;
    protected $text;
    protected $default;

    public function _construct($name, $type, $text, $default='')
    {
        $this->name = $name;
        $this->type = $type;
        $this->text = $text;
        $this->default = $default;
    }
    
    abstract public function render();
}