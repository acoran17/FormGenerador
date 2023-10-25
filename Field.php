<?php
class Field{
    private $name;

    public function _construc($name){
        $this->name = $name;
    }

    public function render(){
        echo "<p><label for=\"id_$this->name\">$this->name: </label>\n";
        echo "<input id=\"id_$this->name\" type=\"$this->type\" name=\"$this->name\"></input></p>";
    }

}