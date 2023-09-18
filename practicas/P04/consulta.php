<?php
include 'Vehiculos.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['matricula'])) {
        $matriculaConsultada = strtoupper($_POST['matricula']);

        if (array_key_exists($matriculaConsultada, $parqueVehicular)) {
            $vehiculo = $parqueVehicular[$matriculaConsultada];
            echo "<h3>Información del Vehículo con Matrícula $matriculaConsultada</h3>";
            echo "<pre>";
            print_r($vehiculo);
            echo "</pre>";
        } else {
            echo "<p>No se encontró ningún vehículo con la matrícula $matriculaConsultada.</p>";
        }
    } elseif (isset($_POST['mostrar_todos'])) {
        echo "<h3>Lista de Todos los Vehículos Registrados</h3>";
        echo "<pre>";
        print_r($parqueVehicular);
        echo "</pre>";
    }
}
?>  
