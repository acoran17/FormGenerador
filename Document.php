<?php
require_once 'Element';
class document{
    private $title;

    private $elements = [];

    private $cabecera = [];

    public function _construct($title){
        $this->title = $title;
    }

    public function add(Element $element){
        $this->elements[] = $element;
    }
    public function render(){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
    foreach($this->elements as $element){
        $element->render();
    }
 ?>   
</body>
</html>
<?php 
    }
}   
