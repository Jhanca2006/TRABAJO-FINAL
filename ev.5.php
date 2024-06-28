<?php
echo "INICIO DE SESION.";

$nom = readline("ingrese su nombre:\n");
$contra = readline("ingrese su contraseña: ");
$empleados = [];

if ($nom == "kevin" && $contra == 1234) {

    $n = readline("ingrese el numero de empleados a registrar: ");

    for ($i=0; $i <=$n; $i++) { 
        echo "Persona $i:\n";
        $nombre = readline("nombre: ");
        $dni = readline("DNI: ");
        $estatura = readline("estatura: ");
        $edad = readline("edad: ");
        $genero = readline("genero M O F: ");
        $peso = readline("peso kg: ");
        $fuma = readline("fuma si o no: ");

        $empleado =[

            'nombre' => $nombre,
            'dni' => $dni,
            'estatura' => $estatura,
            'edad' => $edad,
            'genero' => $genero,
            'peso' => $peso,
            'fumador' =>$fuma,
        ];
        $empleados[] = $empleado;
    }
    $nombreBuscado = readline("ingrese el nombre del empleado a buscar. ");
        $dniBuscado = readline("ingrese el DNI del trabajador. ");

        foreach ($empleados as $empleado) {
            if ($empleado['nombre'] == $nombreBuscado && $empleado['dni'] == $dniBuscado) {
                 echo "Nombre: " . $empleado['nombre'] . "\n";
                 echo "DNI: " . $empleado['dni'] . "\n";
                 echo "Peso: " . $empleado['peso'] . "\n";
                 echo "Edad: " . $empleado['edad'] . "\n";
                 echo "Altura: " . $empleado['estatura'] . "\n";
                 echo "Género: " . $empleado['genero'] . "\n";
                 echo "¿Fuma?: " . $empleado['fumador']  . "\n";
        break;
    }else {
        echo "el empleado no existe";
    }
}
}else {
    echo "el inicio de sesion es incorrecto verifique el nombre o la contraseña";
}