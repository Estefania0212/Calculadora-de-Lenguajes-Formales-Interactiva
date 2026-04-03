<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">


</head>
<body>
    <div class="container mt-5">
        <h1 class="title"> 🏠 BIENVENIDO  <br> CALCULADORA DE LENGUAJES FORMALES</h1>
        <div class="mt-4 btn-container text-center">
            <button type="button" class="btn circle-button btn1" data-bs-toggle="modal" data-bs-target="#alfabetos">
                📚 OPERACIONES CON ALFABETOS
            </button>
            <button type="button" class="btn circle-button btn2" data-bs-toggle="modal" data-bs-target="#cadenaModal">
                🔗 OPERACIONES CON CADENAS
            </button>
            <button type="button" class="btn circle-button btn3" data-bs-toggle="modal" data-bs-target="#lenguajeModal">
                🗣️ OPERACIONES CON LENGUAJES
            </button>
        </div>
    </div>
     <!-- Botón para operaciones con alfabetos -->
    <div class="modal fade" id="alfabetos">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">  📚 CALCULADORA ALFABETO</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container mt-3">
                        <br>
                        <!-- Nav tabs -->
                        <form id="alfabetoForm">
                            <input type="hidden" name="opcionAlfabeto" id="opcionAlfabeto" value="pertenencia">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#pertenencia" onclick="setOption('pertenencia')">Pertenencia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#union" onclick="setOption('union')">Unión</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#interseccion" onclick="setOption('interseccion')">Interseccion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#complemento" onclick="setOption('complemento')">Complemento</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#absoluta" onclick="setOption('absoluta')">Diferencia Absoluta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#simetrica" onclick="setOption('simetrica')">Diferencia Simetrica</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="pertenencia" class="container tab-pane active"><br>
                                    <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                    <h4>Pertenencia</h4>
                                        <p>La <strong>pertenencia</strong> se refiere a la relación entre un elemento y un conjunto. Un elemento pertenece a un conjunto si está incluido en él.</p>
                                    </div><br>
                                    <div class="mb-3">
                                        <label for="conjunto1-pertenencia" class="form-label">Ingresa el Conjunto A:</label>
                                        <input type="text" name="conjunto1-pertenencia" class="form-control pill-input" id="conjunto1-pertenencia" placeholder="Ej: {1, 2, 3}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="elemento" class="form-label">Ingresa el elemento a verificar:</label>
                                        <input type="text" name="elemento" class="form-control pill-input" id="elemento" placeholder="Ej: 2" required>
                                    </div>
                                    <span>Ejemplo: El elemento 2 pertenece al Conjunto A = {1, 2, 3}</span>
                                </div>
                                <div id="union" class="container tab-pane"><br>
                                    <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                    <h4>Unión</h4>
                                    <p>La <strong>unión</strong> de dos conjuntos combina todos los elementos de ambos conjuntos. En otras palabras, incluye todos los elementos que están en cualquiera de los conjuntos, sin repetir elementos.</p>
                                    </div><br>
                                    <div class="mb-3">
                                        <label for="conjunto1-union" class="form-label">Ingresa el Conjunto A:</label>
                                        <input type="text" name="conjunto1-union" class="form-control pill-input" id="conjunto1-union" placeholder="Ej: {a, b, c, d}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="conjunto2-union" class="form-label">Ingresa el Conjunto B:</label>
                                        <input type="text" name="conjunto2-union" class="form-control pill-input" id="conjunto2-union" placeholder="Ej: {c, d, e, h}" required>
                                    </div>
                                    <span>Ejemplo: La unión de A = {a, b, c, d} y B = {c, d, e, h} es A ∪ B = {a, b, c, d, e , h}</span>
                                </div>
                                <div id="interseccion" class="container tab-pane fade"><br>
                                    <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                        <h4>Intersección</h4>
                                        <p>La <strong>intersección</strong> de dos conjuntos incluye solo los elementos que están en ambos conjuntos. Es decir, solo aquellos elementos que son comunes a ambos conjuntos.</p>
                                    </div><br>
                                    <div class="mb-3">
                                        <label for="conjunto1-interseccion" class="form-label">Ingrese el Conjunto A:</label>
                                        <input type="text" name="conjunto1-interseccion" class="form-control pill-input" id="conjunto1-interseccion" placeholder="Ej: {1, 2, 3}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="conjunto2-interseccion" class="form-label">Ingrese el Conjunto B:</label>
                                        <input type="text" name="conjunto2-interseccion" class="form-control pill-input" id="conjunto2-interseccion" placeholder="Ej: {2, 3, 4}" required>
                                    </div>
                                    <span>Ejemplo: La intersección de A = {1, 2, 3} y B = {2, 3, 4} es A ∩ B = {2, 3}</span>
                                </div>
                                <div id="complemento" class="container tab-pane fade"><br>
                                    <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                    <h4>Complemento</h4>
                                        <p>El <strong>complemento</strong> de un conjunto 𝐴 con respecto a un conjunto universal U es el conjunto de todos los elementos que están en U pero no en A. Es decir, el complemento de A incluye todos los elementos del conjunto universal que no pertenecen a A.</p>
                                    </div><br>
                                    <div class="mb-3">
                                        <label for="conjunto1-complemento" class="form-label">Ingrese el Conjunto A:</label>
                                        <input type="text" name="conjunto1-complemento" class="form-control pill-input" id="conjunto1-complemento" placeholder="Ej: {a, c, e}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="conjunto2-complemento" class="form-label">Ingrese el Conjunto Universal:</label>
                                        <input type="text" name="conjunto2-complemento" class="form-control pill-input" id="conjunto2-complemento" placeholder="Ej: {a, b, c, d, e, f}" required>
                                    </div>
                                    <span>Ejemplo: El complemento del Conjunto A = {a, c, e} en el Conjunto Universal = {a, b, c, d, e, f} es A' = {b, d, f}</span>
                                </div>
                                <div id="absoluta" class="container tab-pane fade"><br>
                                    <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                    <h4>Diferencia Absoluta</h4>
                                        <p>La <strong>diferencia absoluta</strong> entre dos conjuntos se refiere a todos los elementos que están en uno de los conjuntos, pero no en ambos. </p>
                                    </div><br>
                                    <div class="mb-3">
                                        <label for="conjunto1-absoluta" class="form-label">Ingrese el Conjunto A:</label>
                                        <input type="text" name="conjunto1-absoluta" class="form-control pill-input" id="conjunto1-absoluta" placeholder="Ej: { a, b, c, d}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="conjunto2-absoluta" class="form-label">Ingrese el Conjunto B:</label>
                                        <input type="text" name="conjunto2-absoluta" class="form-control pill-input" id="conjunto2-absoluta" placeholder="Ej: {a, e, f, g}" required>
                                    </div>
                                    <span>Ejemplo: La diferencia absoluta entre A = {a, b, c, d} y B = {a, e, f, g} es A \ B = {b, c, d}</span>
                                </div>
                                <div id="simetrica" class="container tab-pane fade"><br>
                                    <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                    <h4>Diferencia Simétrica</h4>
                                        <p>La <strong>diferencia Simétrica</strong> entre dos conjuntos A y B se refiere a todos los elementos que están en uno de los conjuntos, pero no en ambos.</p>
                                    </div><br>
                                    <div class="mb-3">
                                        <label for="conjunto1-simetrica" class="form-label">Ingrese el Conjunto A:</label>
                                        <input type="text" name="conjunto1-simetrica" class="form-control pill-input" id="conjunto1-simetrica" placeholder="Ej: {a, b, c, d}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="conjunto2-simetrica" class="form-label">Ingrese el Conjunto B:</label>
                                        <input type="text" name="conjunto2-simetrica" class="form-control pill-input" id="conjunto2-simetrica" placeholder="Ej: {a, e, f, g}" required>
                                    </div>
                                    <span>Ejemplo: La diferencia simétrica entre A = {a, b, c, d} y B = {a, e, f, g} es {b, c, d, e, f, g}</span>
                                </div>
                            </div>
                            <div id="result" class="mt-4">
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="calcularBtn" class="btn btn-success ">Calcular</button>
                                <button id="copiarResultado1" class="btn btn-primary ">Copiar</button>
                                <button type="reset" class="btn btn-warning">Limpiar</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Modal para operaciones con cadenas -->
    <div class="modal fade" id="cadenaModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">🔗 CALCULADORA CADENAS</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container mt-3">
                        <br>
                        <!-- Nav tabs -->
                        <form id="cadenaForm">
                            <input type="hidden" name="cadenaOption" id="cadenaOption" value="longitud">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#longitud" onclick="setOption('longitud')">Longitud</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#concatenacion" onclick="setOption('concatenacion')">Concatenación</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#potenciacion" onclick="setOption('potenciacion')">Potenciación</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#inversa" onclick="setOption('inversa')">Inversa</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                            <div id="longitud" class="container tab-pane active"><br>
                                <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                    <h4>Longitud</h4>
                                    <p>La <strong>longitud</strong> de una cadena se refiere al número de caracteres que contiene. Para calcular la longitud de una cadena, simplemente contamos los caracteres presentes en ella.</p>
                                </div><br>
                                <div class="mb-3">
                                    <label for="cadena-longitud1" class="form-label">Ingresa la primera cadena:</label>
                                    <input type="text" name="cadena-longitud1" class="form-control pill-input" id="cadena-longitud1" placeholder="Ej :Hola" required>
                                </div>
                                <div class="mb-3">
                                    <label for="cadena-longitud2" class="form-label">Ingresa la segunda cadena:</label>
                                    <input type="text" name="cadena-longitud2" class="form-control pill-input" id="cadena-longitud2" placeholder="Ej :Profe Victor" required>
                                </div>
                                <span>Ejemplo: La longitud de la cadena "Hola" + la cadena "Profe Victor" es 16.</span>
                            </div>
                            <div id="concatenacion" class="container tab-pane fade"><br>
                                <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                    <h4>Concatenación</h4>
                                    <p>La <strong>concatenación</strong> de dos cadenas de texto consiste en unirlas en una sola cadena. El resultado es una cadena que contiene los caracteres de la primera cadena seguidos de los caracteres de la segunda cadena.</p>
                                </div><br>
                                <div class="mb-3">
                                    <label for="cadena1-concatenacion" class="form-label">Ingresa la primer cadena:</label>
                                    <input type="text" name="cadena1-concatenacion" class="form-control pill-input" id="cadena1-concatenacion" placeholder="Ej : Hola">
                                </div>
                                <div class="mb-3">
                                    <label for="cadena2-concatenacion" class="form-label">Ingresa la segunda cadena:</label>
                                    <input type="text" name="cadena2-concatenacion" class="form-control pill-input" id="cadena2-concatenacion" placeholder="Ej : Mundo">
                                </div>
                                <span>Ejemplo: La concatenacion de la cadena "Hola" + la cadena "Mundo" es HolaMundo.</span>
                            </div>
                            <div id="potenciacion" class="container tab-pane fade"><br>
                                <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                    <h4>Potenciación</h4>
                                    <p>La <strong>potenciación</strong> de una cadena se refiere a repetir la cadena un número específico de veces. Por ejemplo, si la cadena es "abc" y el exponente es 3, el resultado es "abcabcabc".</p>
                                </div><br>
                                <div class="mb-3">
                                    <label for="cadena-potenciacion" class="form-label">Ingresa la cadena a potenciar:</label>
                                    <input type="text" name="cadena-potenciacion" class="form-control pill-input" id="cadena-potenciacion" placeholder="Ej : Estefania">
                                </div>
                                <div class="mb-3">
                                    <label for="exponente-potenciacion" class="form-label">Ingresa el Exponente:</label>
                                    <input type="number" name="exponente-potenciacion" class="form-control pill-input" id="exponente-potenciacion" placeholder="Ej : 2" min="1">
                                </div>
                                <span>Ejemplo: La cadena 'Estefania' repetida 2 veces es: EstefaniaEstefania .</span>
                            </div>
                            <div id="inversa" class="container tab-pane fade"><br>
                                <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                    <h4>Inversa</h4>
                                    <p>La <strong>inversa</strong> de una cadena se refiere a invertir el orden de sus caracteres. Por ejemplo, la inversa de "hola" es "aloh".</p>
                                </div><br>
                                <div class="mb-3">
                                    <label for="cadena-inversa" class="form-label">Ingresa la cadena a Invertir:</label>
                                    <input type="text" name="cadena-inversa" class="form-control pill-input" id="cadena-inversa" placeholder="Ej : Juanita">
                                </div>
                                <span>Ejemplo: La inversa de la cadena "Juanita" es: 'atinauJ' </span>
                            </div>
                            </div>
                            <div id="cadenaResult" class="mt-4"></div>
                            <div class="modal-footer">
                                <button type="button" id="cadenaCalcularBtn" class="btn btn-success ">Calcular</button>
                                <button id="copiarResultado2" class="btn btn-primary ">Copiar</button>
                                <button type="reset" class="btn btn-warning">Limpiar</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Modal para operaciones con lenguajes -->
        <div class="modal fade" id="lenguajeModal">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                         <h4 class="modal-title">🗣️ CALCULADORA LENGUAJES</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <br>
                            <!-- Formulario para operaciones con lenguajes -->
                            <form id="lenguajeForm">
                            <input type="hidden" name="lenguajeOption" id="lenguajeOption" value="concatenacionlenguaje">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#concatenacion-lenguaje" onclick="setOption('concatenacionlenguaje')">Concatenación</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#potencia-lenguaje" onclick="setOption('potencialenguaje')">Potencia</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#inversa-lenguaje" onclick="setOption('inversalenguaje')">Inversa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#union-lenguaje" onclick="setOption('unionlenguaje')">Unión</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#interseccion-lenguaje" onclick="setOption('interseccionlenguaje')">Intersección</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#resta-lenguaje" onclick="setOption('restalenguaje')">Resta</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#clausura-kleene-lenguaje" onclick="setOption('clausuraKleene')">Clausura de Kleene</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#clausura-positiva-lenguaje" onclick="setOption('clausuraPositiva')">Clausura Positiva</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Concatenación -->
                                    <div id="concatenacion-lenguaje" class="container tab-pane active"><br>
                                        <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                            <h4>Concatenación</h4>
                                            <p>La <strong>concatenación</strong> de lenguajes consiste en unir todos los strings de un lenguaje con todos los strings de otro lenguaje. Esto significa que cualquier string del primer lenguaje seguido de cualquier string del segundo lenguaje forma un nuevo string en el lenguaje resultante.</p>
                                        </div><br>
                                        <div class="mb-3">
                                            <label for="lenguaje1-concatenacion" class="form-label">Ingresa el primer lenguaje:</label>
                                            <input type="text" name="lenguaje1-concatenacion" class="form-control pill-input" id="lenguaje1-concatenacion" placeholder="Ej: L1 = {nana,napa,lana}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lenguaje2-concatenacion" class="form-label">Ingresa el segundo lenguaje:</label>
                                            <input type="text" name="lenguaje2-concatenacion" class="form-control pill-input" id="lenguaje2-concatenacion" placeholder="Ej: L2 = {nana,napa,pana,palabra,papa,pala} ">
                                        </div>
                                        <span>Ejemplo: La concatenacion de L1 = {nana,napa,lana} y el L2 = {nana,napa,pana,palabra,papa,pala}, entonces la concatenación de L1.L2 es {nana, napa, lana, nana, napa, pana, palabra, papa, pala, nananana, nananapa, nanapana, nanapalabra, nanapapa, nanapala, napanana, napanapa, napapana, napapalabra, napapapa, napapala, lananana, lananapa, lanapana, lanapalabra, lanapapa, lanapala}.</span>
                                    </div>
                                    <!-- Potencia -->
                                    <div id="potencia-lenguaje" class="container tab-pane fade"><br>
                                        <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                            <h4>Potenciación</h4>
                                            <p>La <strong>potenciación</strong> de un lenguaje se refiere a la concatenación de un lenguaje con sí mismo un número determinado de veces. Por ejemplo, si se tiene un lenguaje y se quiere elevarlo a un exponente n, se concatenará el lenguaje consigo mismo n veces.</p>
                                        </div><br>
                                        <div class="mb-3">
                                            <label for="lenguaje-potencia" class="form-label">Ingresa el lenguaje:</label>
                                            <input type="text" name="lenguaje-potencia" class="form-control" id="lenguaje-potencia" placeholder="Ej: L1 = {0, 1}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exponente-potencia" class="form-label">Ingresa el exponente:</label>
                                            <input type="number" name="exponente-potencia" class="form-control" id="exponente-potencia" placeholder="Ej: 2" min="1">
                                        </div>
                                        <span>Ejemplo: Si el  L1 = {0, 1} y el Exponente = 2, entonces la potenciación del lenguaje es { 00, 01, 10, 11 }.</span>
                                    </div>
                                    <!-- Inversa -->
                                    <div id="inversa-lenguaje" class="container tab-pane fade"><br>
                                        <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                            <h4>Inversa</h4>
                                            <p>La <strong>inversa</strong> de un lenguaje se refiere a la inversión de cada cadena en el lenguaje. Esto significa que cada cadena es revertida en su orden de caracteres.</p>
                                        </div><br>
                                        <div class="mb-3">
                                            <label for="lenguaje-inversa" class="form-label">Ingresa el lenguaje:</label>
                                            <input type="text" name="lenguaje-inversa" class="form-control" id="lenguaje-inversa" placeholder="Ej: L = { 0, 1 , 00, 10 }">
                                        </div>
                                        <span>Ejemplo: La inversa del  L = { 0, 1 , 00, 10 } es  0, 00 , 1 , 01: .</span>
                                    </div>
                                    <!-- Unión -->
                                    <div id="union-lenguaje" class="container tab-pane fade"><br>
                                        <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                            <h4>Unión</h4>
                                            <p>La <strong>unión</strong> de dos lenguajes combina todos los strings de ambos lenguajes sin duplicar elementos. Incluye todos los elementos que están en cualquiera de los lenguajes.</p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="lenguaje1-union" class="form-label">Ingresa el primer lenguaje:</label>
                                            <input type="text" name="lenguaje1-union" class="form-control" id="lenguaje1-union" placeholder="Ej: {nana, napa, lana}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lenguaje2-union" class="form-label">Ingresa el segundo lenguaje:</label>
                                            <input type="text" name="lenguaje2-union" class="form-control" id="lenguaje2-union" placeholder="Ej: {#, nana, napa, pana, palabra, papa, pala}">
                                        </div>
                                        <span>
                                        <strong>Nota:El simbolo # representa vacio </strong><br>
                                        Ejemplo: La unión del  Lenguaje 1 = {nana, napa, lana} y el Lenguaje 2 = {#, nana, napa, pana, palabra, papa, pala} es {nana, napa, lana, #, pana, palabra, papa, pala}.</span>
                                    </div>
                                    <!-- Intersección -->
                                    <div id="interseccion-lenguaje" class="container tab-pane fade"><br>
                                        <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                            <h4>Intersección</h4>
                                            <p>La <strong>intersección</strong> de dos lenguajes contiene todos los strings que están presentes en ambos lenguajes.</p>
                                        </div><br>
                                        <div class="mb-3">
                                            <label for="lenguaje1-interseccion" class="form-label">Ingresa el primer lenguaje:</label>
                                            <input type="text" name="lenguaje1-interseccion" class="form-control" id="lenguaje1-interseccion" placeholder="Ej: {nana, napa, lana}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lenguaje2-interseccion" class="form-label">Ingresa el segundo lenguaje:</label>
                                            <input type="text" name="lenguaje2-interseccion" class="form-control" id="lenguaje2-interseccion" placeholder="Ej: {nana, napa, pana, palabra, papa, pala}">
                                        </div>
                                        <span>Ejemplo: La interseccion del Lenguaje 1 = {nana, napa, lana} y el Lenguaje 2 = {nana, napa, pana, palabra, papa, pala}, es {nana, napa}.</span>
                                    </div>
                                    <!-- Resta -->
                                    <div id="resta-lenguaje" class="container tab-pane fade"><br>
                                        <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                            <h4>Resta</h4>
                                            <p>La <strong>resta</strong> entre dos lenguajes se refiere a los strings que están en el primer lenguaje pero no en el segundo lenguaje.</p>
                                        </div><br>
                                        <label class="switch">
                                            <input type="checkbox" id="toggleResta" checked>
                                            <span class="slider round"></span>
                                        </label>
                                        <label id="toggleLabel">L1 - L2</label>
                                        
                                        <div class="mb-3">
                                            <label for="lenguaje1-resta" class="form-label">Ingresa el primer lenguaje:</label>
                                            <input type="text" name="lenguaje1-resta" class="form-control" id="lenguaje1-resta" placeholder="Ej: {nana, napa, lana}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lenguaje2-resta" class="form-label">Ingresa el segundo lenguaje:</label>
                                            <input type="text" name="lenguaje2-resta" class="form-control" id="lenguaje2-resta" placeholder="Ej: {#, nana, napa, pana, palabra, papa, pala}">
                                        </div>
                                        <span>
                                        <strong>Nota:El simbolo # representa vacio </strong><br>    
                                        Ejemplo: Si el Lenguaje 1 = {nana, napa, lana} y el Lenguaje 2 = {#, nana, napa, pana, palabra, papa, pala}, La resta de L1 - L2 es {lana}  y la resta de L2-L1 es {#, pala, palabra, pana, papa}.</span>
                                    </div>
                                    <!-- Clausura de Kleene -->
                                    <div id="clausura-kleene-lenguaje" class="container tab-pane fade"><br>
                                        <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                            <h4>Clausura de Kleene</h4>
                                            <p>La <strong>clausura de Kleene</strong> de un lenguaje se refiere a la concatenación de un lenguaje consigo mismo un número arbitrario de veces, incluyendo el caso de no concatenar ninguna vez (es decir, incluir la cadena vacía).</p>
                                        </div><br>
                                        <div class="mb-3">
                                            <label for="repeticiones" class="form-label">Ingrese el número de repeticiones:</label>
                                            <input type="number" id="repeticiones1" class="form-control" name="repeticiones1" min="1" placeholder="Ej: 2" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="lenguaje-clausura-kleene" class="form-label">Ingresa el lenguaje:</label>
                                            <input type="text" name="lenguaje-clausura-kleene" class="form-control" id="lenguaje-clausura-kleene" placeholder="Ej: a,b">
                                        </div>
                                        <span>Ejemplo: Si el Lenguaje = {a, b} y el Número de Repeticiones = 2, entonces la clausura de Kleene del lenguaje es {#, a, b, aa, ab, ba, bb}.</span>
                                    </div>
                                    <!-- Clausura Positiva -->
                                    <div id="clausura-positiva-lenguaje" class="container tab-pane fade"><br>
                                        <div style="background-color: #f0f0f0; padding: 5px; border-radius: 5px;">
                                            <h4>Clausura Positiva</h4>
                                            <p>La <strong>clausura positiva</strong> de un lenguaje es similar a la clausura de Kleene, pero no incluye la cadena vacía. Es la concatenación de un lenguaje consigo mismo un número arbitrario de veces, pero siempre al menos una vez.</p>
                                        </div><br>
                                        <div class="mb-3">
                                            <label for="repeticiones" class="form-label">Ingrese el número de repeticiones:</label>
                                            <input type="number" id="repeticiones" class="form-control" name="repeticiones" min="1" placeholder="Ej: 2" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="lenguaje-clausura-positiva" class="form-label">Ingresa el lenguaje:</label>
                                            <input type="text" name="lenguaje-clausura-positiva" class="form-control" id="lenguaje-clausura-positiva" placeholder="Ej: {0, 1}">
                                        </div>
                                        <span>Ejemplo: La clausura positiva del Lenguaje = {0, 1} y el Número de Repeticiones = 2 es : 00,01,10,11</span>
                                    </div>

                                </div>
                                <!-- Contenedor para resultados -->
                            <div id="lenguajeResult" class="mt-3"></div>
                                <div class="mt-4">
                                    <div class="modal-footer">
                                        <button type="button" id="lenguajeCalcularBtn" class="btn btn-success">Calcular</button>
                                        <button id="copiarResultado3" class="btn btn-primary ">Copiar</button>
                                        <button type="reset" class="btn btn-warning">Limpiar</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- Footer -->
            <footer class="footer">
                <p>Estefanía Moreno Reyes &amp; María Juanita Tamayo Marín</p>
            </footer>
        <script src="js/script.js"></script>
</body>
</html>
