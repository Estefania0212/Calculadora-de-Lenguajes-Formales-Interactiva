<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura la opción seleccionada


    $opcion = $_POST['opcionAlfabeto'] ?? '';

    // Captura los conjuntos ingresados
    $conjunto1 = '';
    $conjunto2 = '';
    $elemento = '';

    // Captura los conjuntos y el elemento a verificar basado en la opción seleccionada
    switch ($opcion) {
        case 'pertenencia':
            $conjunto1 = $_POST['conjunto1-pertenencia'] ?? '';
            $elemento = $_POST['elemento'] ?? '';
            break;
        case 'union':
            $conjunto1 = $_POST['conjunto1-union'] ?? '';
            $conjunto2 = $_POST['conjunto2-union'] ?? '';
            break;
        case 'interseccion':
            $conjunto1 = $_POST['conjunto1-interseccion'] ?? '';
            $conjunto2 = $_POST['conjunto2-interseccion'] ?? '';
            break;
        case 'complemento':
            $conjunto1 = $_POST['conjunto1-complemento'] ?? '';
            $conjunto2 = $_POST['conjunto2-complemento'] ?? '';
            break;
        case 'absoluta':
            $conjunto1 = $_POST['conjunto1-absoluta'] ?? '';
            $conjunto2 = $_POST['conjunto2-absoluta'] ?? '';
            break;
        case 'simetrica':
            $conjunto1 = $_POST['conjunto1-simetrica'] ?? '';
            $conjunto2 = $_POST['conjunto2-simetrica'] ?? '';
            break;
    }

    // Convierte los conjuntos de cadenas separadas por comas a arrays
    $conjunto1Array = array_map('trim', explode(',', $conjunto1));
    $conjunto2Array = array_map('trim', explode(',', $conjunto2));

    // Convierte todos los elementos a minúsculas para comparación insensible a mayúsculas/minúsculas
    $conjunto1Array = array_map('strtolower', $conjunto1Array);
    $elemento = strtolower(trim($elemento));
    $conjunto2Array = array_map('strtolower', $conjunto2Array);

    

    // Procesa la opción seleccionada
    switch ($opcion) {
        case 'pertenencia':
            if (in_array($elemento, $conjunto1Array)) {
                echo "El elemento '$elemento' pertenece al Conjunto 1.";
            } else {
                echo "El elemento '$elemento' no pertenece al Conjunto 1.";
            }
            break;
        case 'union':
            $union = array_unique(array_merge($conjunto1Array, $conjunto2Array));
            echo "La unión de los conjuntos A U B es: { " . implode(', ', $union) . " }";
            
            break;
        case 'interseccion':
            $interseccion = array_intersect($conjunto1Array, $conjunto2Array);
            echo "La intersección de los conjuntos A ∩ B es: {" . implode(', ', $interseccion) . " }";
            break;
        case 'complemento':
            $complemento = array_diff($conjunto2Array, $conjunto1Array);
            echo "El complemento del conjunto A en relación con el conjunto universal U es C ={ " . implode(', ', $complemento).' }';
            break;
        case 'absoluta':

            $diferenciaAbsoluta = array_diff($conjunto1Array, $conjunto2Array);
            $diferenciaAbsolutaString = implode(', ', $diferenciaAbsoluta);
            echo "La diferencia absoluta de Conjunto A respecto a Conjunto B es A\B = { " . $diferenciaAbsolutaString . '}';
                        break;
        case 'simetrica':
            $diferenciaSimetrica = array_merge(array_diff($conjunto1Array, $conjunto2Array), array_diff($conjunto2Array, $conjunto1Array));
            echo "La diferencia simétrica de los conjuntos es: A-B = { " . implode(', ', $diferenciaSimetrica) . " }";
            break;
        default:
            $message = "No seleccionaste ningun alfabeto, selecciona uno porfavor!!";
            break;
    }

}
