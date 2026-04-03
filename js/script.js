$(document).ready(function() {
    $('#calcularBtn').click(function() {
        $.ajax({
            url: 'alfabetos/alfabeto.php',
            type: 'POST',
            data: $('#alfabetoForm').serialize(),
            success: function(response) {
                $('#result').html(`
                    <div class="alert alert-dismissible fade show" style="background-color: #F9D7DD; color: black;  font-family: 'Poppins', sans-serif;">
                        <button type="button" class="btn-close" aria-label="Close"></button>
                        <strong style="color: fuchsia;">Respuesta:</strong> ${response}
                    </div>
                `);
                $('.btn-close').click(function() {
                    $(this).parent().remove();
                });
            },
            error: function() {
                $('#result').html(`
                    <div class="alert alert-danger">
                        <button type="button" class="btn-close" aria-label="Close"></button>
                        <strong>Error!</strong> No se pudo procesar la solicitud.
                    </div>
                `);
                $('.btn-close').click(function() {
                    $(this).parent().remove();
                });
            }
        });
    });

    $('#cadenaCalcularBtn').click(function() {
        $.ajax({
            url: 'cadenas/cadenas.php',
            type: 'POST',
            data: $('#cadenaForm').serialize(),
            success: function(response) {
                $('#cadenaResult').html(`
                    <div class="alert alert-dismissible fade show" style="background-color: #F9D7DD; color: black;  font-family: 'Poppins', sans-serif;">
                        <button type="button" class="btn-close" aria-label="Close"></button>
                        <strong style="color: fuchsia;">Respuesta:</strong> ${response}
                    </div>
                `);
                $('.btn-close').click(function() {
                    $(this).parent().remove();
                });
            },
            error: function() {
                $('#cadenaResult').html(`
                    <div class="alert alert-danger">
                        <button type="button" class="btn-close" aria-label="Close"></button>
                        <strong>Error!</strong> No se pudo procesar la solicitud.
                    </div>
                `);
                $('.btn-close').click(function() {
                    $(this).parent().remove();
                });
            }
        });
    });

    $('#lenguajeCalcularBtn').click(function() {
        var formData = $('#lenguajeForm').serialize();
        console.log('Datos enviados:', formData);
        $.ajax({
            url: 'lenguajes/lenguajes.php',
            type: 'POST',
            data: $('#lenguajeForm').serialize(),
            success: function(response) {
                $('#lenguajeResult').html(`
                    <div class="alert alert-dismissible fade show" style="background-color: #F9D7DD; color: black;  font-family: 'Poppins', sans-serif;">
                        <button type="button" class="btn-close" aria-label="Close"></button>
                        <strong>Respuesta:</strong> ${response}
                    </div>
                `);
                $('.btn-close').click(function() {
                    $(this).parent().remove();
                });
            },
            error: function() {
                $('#lenguajeResult').html(`
                    <div class="alert alert-danger">
                        <button type="button" class="btn-close" aria-label="Close"></button>
                        <strong>Error!</strong> No se pudo procesar la solicitud.
                    </div>
                `);
                $('.btn-close').click(function() {
                    $(this).parent().remove();
                });
            }
        });
    });
});



function setOption(option) {
    if (option.startsWith('pertenencia') || option.startsWith('union') || option.startsWith('interseccion') || option.startsWith('complemento') || option.startsWith('absoluta') || option.startsWith('simetrica')) {
        $('#opcionAlfabeto').val(option);
    } else if (option.startsWith('longitud') || option.startsWith('concatenacion') || option.startsWith('potenciacion') || option.startsWith('inversa')) {
        $('#cadenaOption').val(option);
    }else if(option.startsWith('concatenacionlenguaje') || option.startsWith('potencialenguaje') || option.startsWith('inversalenguaje') || option.startsWith('unionlenguaje') || option.startsWith('interseccionlenguaje') || option.startsWith('restalenguaje') || option.startsWith('clausuraKleene') || option.startsWith('clausuraPositiva')){
        $('#lenguajeOption').val(option);
    }
     $('#lenguajeOption').val(option);
    // Limpia el contenido de las cajas de texto
    $('input[type="text"]').val('');
    // Limpia el mensaje de respuesta
    $('#result').html('');
    $('#cadenaResult').html('');
    $('#lenguajeResult').html('');
}

document.addEventListener('DOMContentLoaded', function() {
function copyToClipboard(elementId) {
    var resultText = document.getElementById(elementId).innerText;
    if (navigator.clipboard) {
        navigator.clipboard.writeText(resultText).then(function() {
            alert('Resultado copiado al portapapeles');
        }).catch(function(err) {
            console.error('Error al copiar al portapapeles: ', err);
        });
    } else {
        var tempInput = document.createElement('input');
        document.body.appendChild(tempInput);
        tempInput.value = resultText;
        tempInput.select();
        try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'exitosamente' : 'no se pudo copiar';
            alert('Resultado ' + msg + ' al portapapeles');
        } catch (err) {
            console.error('Error al copiar al portapapeles: ', err);
        }
        document.body.removeChild(tempInput);
    }
}

document.getElementById('copiarResultado1').addEventListener('click', function() {
    copyToClipboard('result');
});

document.getElementById('copiarResultado2').addEventListener('click', function() {
    // Asegúrate de tener un contenedor con id 'lenguajeResult2'
    copyToClipboard('cadenaResult');
});

document.getElementById('copiarResultado3').addEventListener('click', function() {
    // Asegúrate de tener un contenedor con id 'lenguajeResult3'
    copyToClipboard('lenguajeResult');
});
});


$(document).ready(function() {
$('#toggleResta').change(function() {
    var isChecked = $(this).is(':checked');
    var label = $('#toggleLabel');

    if (isChecked) {
        label.text('L1 - L2');
    } else {
        label.text('L2 - L1');
    }
});

$('#lenguajeCalcularBtn').click(function() {
    var formData = $('#lenguajeForm').serialize();
    var toggleChecked = $('#toggleResta').is(':checked');

    // Añadir la opción del interruptor al formData
    formData += '&toggleChecked=' + (toggleChecked ? 'L1-L2' : 'L2-L1');

    $.ajax({
        url: 'lenguajes/lenguajes.php',
        type: 'POST',
        data: formData,
        success: function(response) {
            $('#lenguajeResult').html(`
                <div class="alert alert-dismissible fade show" style="background-color: #F9D7DD; color: black;  font-family: 'Poppins', sans-serif;">
                    <button type="button" class="btn-close" aria-label="Close"></button>
                    <strong style="color: fuchsia;">Respuesta:</strong> ${response}
                </div>
            `);
            $('.btn-close').click(function() {
                $(this).parent().remove();
            });
        },
        error: function() {
            $('#lenguajeResult').html(`
                <div class="alert alert-danger">
                    <button type="button" class="btn-close" aria-label="Close"></button>
                    <strong>Error!</strong> No se pudo procesar la solicitud.
                </div>
            `);
            $('.btn-close').click(function() {
                $(this).parent().remove();
            });
        }
    });
});
});

