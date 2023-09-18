<?php
function verificarEdadYSexo($edad, $sexo) {
    if ($edad >= 18 && $edad <= 35 && $sexo === 'femenino') {
        return "Bienvenida, usted está en el rango de edad permitido.";
    } else {
        return "Lo sentimos, no cumple con los requisitos de edad y/o sexo.";
    }
}
?>
