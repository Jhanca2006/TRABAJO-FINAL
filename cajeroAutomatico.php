<?php

function cajero() 


{
    // Clave de ingreso
    $claveCorrecta = '1234'; 
    $saldo = 1000; // Saldo inicial
    $claveIngresada = '';

    // Solicitar la clave

    while ($claveIngresada !== $claveCorrecta) {
        $claveIngresada = readline("Ingrese su clave: ");

        if ($claveIngresada !== $claveCorrecta) {
            echo "Clave incorrecta. Intente de nuevo.\n";
        }
    }


    
    $opcion = '';
    while ($opcion !== '3') {
        echo "\nSaldo actual: $$saldo\n";
        echo "Opciones:\n";
        echo "1. Consignar\n";
        echo "2. Retirar\n";
        echo "3. Salir\n";
        $opcion = readline("Seleccione una opción: ");



        switch ($opcion) {
            case '1': // Consignar
                $cantidadConsignar = (float) readline("Ingrese la cantidad a consignar: ");
                if ($cantidadConsignar > 0) {
                    $saldo += $cantidadConsignar;
                    echo "Se han consignado $$cantidadConsignar.\n";
                } else {
                    echo "La cantidad debe ser mayor que 0.\n";
                }
                break;




            case '2': // Retirar
                $cantidadRetirar = (float) readline("Ingrese la cantidad a retirar: ");
                if ($cantidadRetirar > 0 && $cantidadRetirar <= $saldo) {
                    $saldo -= $cantidadRetirar;
                    echo "Se han retirado $$cantidadRetirar.\n";
                } elseif ($cantidadRetirar > $saldo) {
                    echo "Saldo insuficiente.\n";
                } else {
                    echo "La cantidad debe ser mayor que 0.\n";
                }
                break;

            case '3': // Salir
                echo "Gracias por usar el cajero.\n";
                break;

            default:
                echo "Opción no válida. Intente de nuevo.\n";
        }
    }




    echo "Saldo final: $$saldo\n";
}

cajero();




?>