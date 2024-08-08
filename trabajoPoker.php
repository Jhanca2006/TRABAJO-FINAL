<?php


//cartas y los palos 

function crearMazo() {
    $palos = ['Corazones', 'Diamantes', 'Tréboles', 'Picas'];
    $valores = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
    $mazo = [];

    foreach ($palos as $palo) {
        foreach ($valores as $valor) {
            $mazo[] = $valor . ' de ' . $palo;
        }
    }

     
// Mezcla el mazo
    shuffle($mazo); 
    return $mazo;
}



function repartirCartas(&$mazo, $numCartas) {
    $mano = array_splice($mazo, 0, $numCartas);
    return $mano;
}

$mazo = crearMazo();

$jugador1 = repartirCartas($mazo, 2);
$jugador2 = repartirCartas($mazo, 2);

echo "Mano del Jugador 1: " . implode(', ', $jugador1) . "<br>";
echo "Mano del Jugador 2: " . implode(', ', $jugador2) . "<br>";



function mostrarMano($mano) {
    return implode(', ', $mano);
}

//
echo "Mano del Jugador 1: " . mostrarMano($jugador1) . "<br>";
echo "Mano del Jugador 2: " . mostrarMano($jugador2) . "<br>";



?>




