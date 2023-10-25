<?php
class MultipleField extends Field{
    protected $options = [];

    public function _constructor($name, $type, $text, $default='', $options = []){
        parent::_constructor($name, $type, $text,$default);
        $this->options = $options;
    }
    public function addOption(string $text, string $value){
        $this->options[$text]=$value;
    }

    public function render(){

    }
    public function renderSelect(){
        echo "<p><label for=\"id_$this->name\">$this->text: </label>\n";
        echo "<select id=\"id_$this->name\" name=\"$this->name\">\n";
        foreach($this->options as $text => $value) {
            $selected = ($text == $this->default) ? 'selected' : '';
            echo "\t<option value =\"$value\" $selected> $text</option>\n";
        }
        echo "</select>\n";
    }

    private function renderRadio(){
        echo "<p>$this->text:</p>";
        foreach($this->options as $text => $value){ç
            $id = str_replace(" ", "-", $text);
            echo "<p><input id=\"$id\" type=\"radio\"name=\"$this->name\" value=\"$value\" />\n";
            echo "<label for=\"$id\">$text</label></p>";
        }
    }
}