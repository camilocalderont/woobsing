<?php
$usuarios = [
    ['nombre'=>'Alex','apellido'=>'Escobar','telefono'=>'3211111111'],
    ['nombre'=>'Juan','apellido'=>'Gomex','telefono'=>'3211111111'],
    ['nombre'=>'Andres','apellido'=>'Marin','telefono'=>'3211111111'],
    ['nombre'=>'Angie','apellido'=>'Rivera','telefono'=>'3211111111'],
];

foreach($usuarios as $usuario){
    echo $usuario['nombre'].' '.$usuario['apellido'].' '.$usuario['telefono'];
}