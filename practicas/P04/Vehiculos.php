<?php
$parqueVehicular = array(
    'ABC123' => array(
        'Auto' => array(
            'Marca' => 'Toyota',
            'Modelo' => '2020',
            'Tipo' => 'sedan'
        ),
        'Propietario' => array(
            'Nombre' => 'Juan Pérez',
            'Ciudad' => 'Ciudad A',
            'Dirección' => 'Calle 123'
        )
    ),
    'XYZ789' => array(
        'Auto' => array(
            'Marca' => 'Honda',
            'Modelo' => '2018',
            'Tipo' => 'camioneta'
        ),
        'Propietario' => array(
            'Nombre' => 'María García',
            'Ciudad' => 'Ciudad B',
            'Dirección' => 'Avenida 456'
        )
    ),
);

echo "<pre>";
print_r($parqueVehicular);
echo "</pre>";
?>