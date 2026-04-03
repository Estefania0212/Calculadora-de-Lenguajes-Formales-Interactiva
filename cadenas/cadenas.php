<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura la opción seleccionada
    $opcion = $_POST['cadenaOption'] ?? '';

    // Captura la cadena y el exponente
    $cadena1 = '';
    $cadena2 = '';
    $exponente = 1;



    // Captura los datos basado en la opción seleccionada
    switch ($opcion) {
        case 'longitud':
            $cadena1 = $_POST['cadena-longitud1'] ?? '';
            $cadena2 = $_POST['cadena-longitud2'] ?? '';
            break;
        case 'concatenacion':
            $cadena1 = $_POST['cadena1-concatenacion'] ?? '';
            $cadena2 = $_POST['cadena2-concatenacion'] ?? '';
            break;
        case 'potenciacion':
            $cadena1 = $_POST['cadena-potenciacion'] ?? '';
            $exponente = intval($_POST['exponente-potenciacion'] ?? 1);
            break;
        case 'inversa':
            $cadena1 = $_POST['cadena-inversa'] ?? '';
            break;
    }

    // Procesa la opción seleccionada
    switch ($opcion) {
        case 'longitud':
            $longitud1 = strlen($cadena1);
            $longitud2 = strlen($cadena2);

            // Mostrando las longitudes de las cadenas
            echo "La longitud de la cadena 1 = { $cadena1 } es: $longitud1<br>";
            echo "La longitud de la cadena 2  = {  $cadena2 } es: $longitud2<br>";

            // Si quieres mostrar la suma de ambas longitudes
            $sumaLongitudes = $longitud1 + $longitud2;
            echo "La suma de las longitudes de { $cadena1 } y {.$cadena2.} es: $sumaLongitudes";
            break;
        case 'concatenacion':
            $concatenacion = $cadena1 . $cadena2;
            echo "La concatenación de las cadenas es = { '$concatenacion' . }";
            break;
        case 'potenciacion':
            $potenciacion = str_repeat($cadena1, $exponente);
            echo "La cadena { $cadena1 } repetida { $exponente } veces es:  { '$potenciacion' } ";
            break;
        case 'inversa':
            $inversa = strrev($cadena1);
            echo "La cadena { $cadena1 } invertida es { '$inversa' }";
            break;
        default:
            echo "No se seleccionó ninguna operación válida.";
            break;
    }
}
