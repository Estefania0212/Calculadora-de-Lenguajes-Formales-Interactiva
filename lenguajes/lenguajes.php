<?php

// Obtener la opción seleccionada y los datos del formulario
$opcion = $_POST['lenguajeOption'] ?? '';
$result = '';

// Función para validar y sanitizar cadenas
function sanitizeInput($data)
{
    return htmlspecialchars(strip_tags(trim($data)));
}

// Procesar las opciones según el formulario enviado
switch ($opcion) {
    case 'concatenacionlenguaje':
        $lenguaje1 = sanitizeInput($_POST['lenguaje1-concatenacion'] ?? '');
        $lenguaje2 = sanitizeInput($_POST['lenguaje2-concatenacion'] ?? '');
        $result ='La concatenación del Lenguaje 1 y Lenguaje 2 es: '.concatLenguajes($lenguaje1, $lenguaje2);
        break;

    case 'potencialenguaje':
        $lenguaje = sanitizeInput($_POST['lenguaje-potencia'] ?? '');
        $exponente = (int) ($_POST['exponente-potencia'] ?? 0);
        if ($exponente == 0) {
            $result = 'La potenciación del lenguaje es:  #';
        } else {
            $result = 'La potenciación del lenguaje es: ' .potenciaLenguaje($lenguaje, $exponente);
        }
        break;

    case 'inversalenguaje':
        $lenguaje = sanitizeInput($_POST['lenguaje-inversa'] ?? '');
        $result = ' La inversa del lenguaje es = { '.inversaLenguaje($lenguaje) . " }";
        break;

    case 'unionlenguaje':
        $lenguaje1 = sanitizeInput($_POST['lenguaje1-union'] ?? '');
        $lenguaje2 = sanitizeInput($_POST['lenguaje2-union'] ?? '');
        $result ='La unión del Lenguaje 1 y Lenguaje 2 es = { ' . unionLenguajes($lenguaje1, $lenguaje2) . " }";
        break;

    case 'interseccionlenguaje':
        $lenguaje1 = sanitizeInput($_POST['lenguaje1-interseccion'] ?? '');
        $lenguaje2 = sanitizeInput($_POST['lenguaje2-interseccion'] ?? '');
        $result = 'La intersección del Lenguaje 1 y Lenguaje 2 es = { ' .interseccionLenguajes($lenguaje1, $lenguaje2) . " }";
        break;

    case 'restalenguaje':
        $lenguaje1 = sanitizeInput($_POST['lenguaje1-resta'] ?? '');
        $lenguaje2 = sanitizeInput($_POST['lenguaje2-resta'] ?? '');
        $toggleChecked = $_POST['toggleChecked'] ?? 'L1-L2';

        if ($toggleChecked === 'L2-L1') {
            $result ='La resta del Lenguaje 2 menos Lenguaje 1 es: { ' . restaLenguajes($lenguaje2, $lenguaje1) ." }";
        } else {
            $result ='La resta del Lenguaje 1 menos Lenguaje 2 es: { ' .  restaLenguajes($lenguaje1, $lenguaje2) . " }";
        }
        break;

    case 'clausuraKleene':
        $lenguaje = sanitizeInput($_POST['lenguaje-clausura-kleene'] ?? '');
        $repeticiones1 = (int) ($_POST['repeticiones1'] ?? 3);
     
        if ($repeticiones1 <= 1) {
            $result = 'El número de repeticiones debe ser mayor o igual a 1.';
        } else {
            $result ='La clausura de Kleene del Conjunto A = {  ' .clausuraKleene($lenguaje, '#', $repeticiones1) . ' ...}';
        }
        break;

    case 'clausuraPositiva':
        $lenguaje = sanitizeInput($_POST['lenguaje-clausura-positiva'] ?? '');
        $repeticiones = (int) ($_POST['repeticiones'] ?? 1);
        if ($repeticiones < 1) {
            $result = 'El número de repeticiones debe ser mayor o igual a 1.';
        } else {
            $result ='La clausura de Positiva del Conjunto A = {  ' .clausuraPositiva($lenguaje, $repeticiones) . '... }';
        }
        break;

    default:
        $result = 'Operación no válida.';
        break;
}

// Funciones de ejemplo para operaciones con lenguajes
function concatLenguajes($lenguaje1, $lenguaje2) {
    // Convertir las cadenas en arrays, suponiendo que están separadas por comas
    $lenguaje1Array = explode(',', $lenguaje1);
    $lenguaje2Array = explode(',', $lenguaje2);

    // Resultados de concatenaciones simples
    $resultadoSimple = array();
    foreach ($lenguaje1Array as $cadena1) {
        foreach ($lenguaje2Array as $cadena2) {
            $resultadoSimple[] = trim($cadena1) . trim($cadena2);
        }
    }

    // Resultados de concatenaciones l1.l2
    $resultadoConcatenacion = array();
    foreach ($lenguaje1Array as $cadena1) {
        $resultadoConcatenacion[] = trim($cadena1);
    }
    foreach ($lenguaje2Array as $cadena2) {
        $resultadoConcatenacion[] = trim($cadena2);
    }

    // Convertir los arrays en cadenas separadas por comas
    return implode(', ', $resultadoConcatenacion) . ', ' . implode(', ', $resultadoSimple);
}

function potenciaLenguaje($lenguaje, $exponente) {
    $elementos = explode(',', $lenguaje);
    $result = $elementos;

    // Generar la concatenación de los elementos con ellos mismos hasta el exponente
    for ($i = 1; $i < $exponente; $i++) {
        $result = array_merge(
            array_map(function($x) use ($elementos) {
                return array_map(function($y) use ($x) {
                    return $x . $y;
                }, $elementos);
            }, $result)
        );
        $result = array_merge(...$result);
    }

    // Eliminar duplicados y ordenar
    $result = array_unique($result);
    sort($result);

    return implode(', ', $result);
}

function inversaLenguaje($lenguaje) {
    $elementos = explode(',', $lenguaje);

    // Invertir cada string en el lenguaje
    $result = array_map('strrev', $elementos);

    // Eliminar duplicados y ordenar
    $result = array_unique($result);
    sort($result);

    return implode(', ', $result);
}

function unionLenguajes($l1, $l2){
    // Convertir las cadenas en arrays y limpiar espacios
    $lenguaje1Array = array_map('trim', explode(',', $l1));
    $lenguaje2Array = array_map('trim', explode(',', $l2));

    // Añadir el símbolo vacío `#` si está presente en alguno de los conjuntos
    if (in_array('#', $lenguaje1Array) || in_array('#', $lenguaje2Array)) {
        if (!in_array('#', $lenguaje1Array)) {
            $lenguaje1Array[] = '#';
        }
        if (!in_array('#', $lenguaje2Array)) {
            $lenguaje2Array[] = '#';
        }
    }

    $union = array_unique(array_merge($lenguaje1Array, $lenguaje2Array));

    // Limpiar espacios extra al final
    $result = implode(',', $union);
    return $result;
}

function interseccionLenguajes($l1, $l2){
    $lenguaje1Array = explode(',', $l1);
    $lenguaje2Array = explode(',', $l2);
    $interseccion = array_intersect($lenguaje1Array, $lenguaje2Array);
    return implode(',', $interseccion);
}

function restaLenguajes($l1, $l2) {
    // Convertir las cadenas en arrays, eliminando espacios alrededor de cada elemento
    $lenguaje1Array = array_map('trim', explode(',', $l1));
    $lenguaje2Array = array_map('trim', explode(',', $l2));

    // Reemplazar el símbolo `#` con el conjunto vacío en el lenguaje 2
    $lenguaje2Array = array_map(function($item) {
        return $item === '#' ? '#' : $item;
    }, $lenguaje2Array);

    // Si el conjunto vacío está en L2, lo eliminamos de L1
    if (in_array('#', $lenguaje2Array)) {
        $lenguaje2Array = array_diff($lenguaje2Array, ['#']);
    }

    // Realizar la resta de lenguajes
    $resta = array_diff($lenguaje1Array, $lenguaje2Array);

    // Ordenar y eliminar duplicados, si es necesario
    $resta = array_unique($resta);
    sort($resta);

    // Devolver la respuesta, reemplazando `λ` por `#`
    return implode(', ', array_map(function($item) {
        return $item === '#' ? '#' : $item;
    }, $resta));
}

function clausuraKleene($lenguaje, $simboloVacio = '#', $maxRepeticiones = 3){
    $lenguajeArray = array_map('trim', explode(',', $lenguaje));
    $clausura = [$simboloVacio];
    $combinaciones = [$simboloVacio];

    for ($i = 1; $i <= $maxRepeticiones; $i++) {
        $nuevasCombinaciones = [];
        foreach ($combinaciones as $combinacion) {
            foreach ($lenguajeArray as $palabra) {
                if ($combinacion === $simboloVacio) {
                    $nuevasCombinaciones[] = $palabra;
                } else {
                    $nuevasCombinaciones[] = $combinacion . $palabra;
                }
            }
        }
        $combinaciones = array_merge($combinaciones, $nuevasCombinaciones);
        $clausura = array_merge($clausura, $nuevasCombinaciones);
    }

    // Eliminar duplicados y devolver como cadena
    return implode(',', array_unique($clausura));
}






function clausuraPositiva($lenguaje, $maxRepeticiones = 3)
{
    $lenguajeArray = array_map('trim', explode(',', $lenguaje));
    $clausura = [];

    // Generar todas las posibles combinaciones para la longitud exacta de maxRepeticiones
    $clausura = generarCombinacion($lenguajeArray, $maxRepeticiones);

    // Eliminar duplicados y devolver como cadena
    return implode(',', array_unique($clausura));
}

function generarCombinacion($array, $length)
{
    $result = [];
    if ($length == 1) {
        return $array;
    }
    foreach ($array as $item) {
        foreach (generarCombinacion($array, $length - 1) as $subitem) {
            $result[] = $item . $subitem;
        }
    }
    return $result;
}

// Devolver el resultado como una cadena de texto
echo $result;
