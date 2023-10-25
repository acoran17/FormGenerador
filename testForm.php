SimpleSimpleFieldF<?php
    require_once 'Form.php';
    require_once 'Field.php';
    require_once 'SimpleField.php';
    require_once 'MultipleField.php';
    $form1 = new Form("validate.php", "Prueba formulario", "post");

    $simpleField1 = new SimpleField('Campo 1', 'text');
    $form1->add($SimpleField1);
    $form1->add(new SimpleField('edad', 'number', "¿Que edad tienes?", '18'));
    $form1->add(new SimpleField('color', 'color', '¿Cuál es tu color preferido?', '#00ff00'));
    $form1->add(new SimpleField('suscripcion', 'checkbox', '¿quieres suscribirte?', 'true'));
    $form1->add(new MultipleField('preferido', 'select', '¿cuál es tu módulo preferido?', 'DSW'));
    $options =[
        "Desarrollo en entorno servidor" => "DSW",
        "Desarrollo en entorno cliente" => "DEW",
        "Despliegue de aplicaciones" => "DPL"
    ];
    $form1->add(new MultipleField('preferido', 'select', '¿cuál es tu módulo preferido?', 'Despliegue de aplicaciones', $options));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <h1>Pruebas con formulario</h1>
    <?php $form1->render(); ?>
</body>
</html>